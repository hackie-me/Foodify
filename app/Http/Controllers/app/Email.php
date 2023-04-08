<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Mail\ComposeMail;
use App\Models\Contacts;
use App\Models\Emails;
use Illuminate\Http\Request;
use Mail;
use PhpImap\Exceptions\InvalidParameterException;
use PhpImap\Mailbox;

class Email extends Controller
{
    // Function to show Email Page
    public function index()
    {
        $mailbox = $this->getMailbox();
        // Get a list of all folders on the server
        $mailboxes = $mailbox->getMailboxes('*');

        $folders = [];
        $messages = [];
        // Loop through all the mailboxes and get the message count
        foreach ($mailboxes as $folder) {
            $folderName = $folder['shortpath'];
            $mailbox = $this->getMailbox($folderName);
            $count = $mailbox->countMails();
            $mailIds = $mailbox->searchMailbox('ALL');
            $messagesInFolder = [];
            foreach ($mailIds as $mailId) {
                $message = $mailbox->getMail($mailId);
                $messagesInFolder[] = $message;
            }
            $messages[$folderName] = $messagesInFolder;
            $folders[$folderName] = $count;
        }
        echo "<pre>";
        print_r($folders);
        echo "</pre><hr>";
        echo "<pre>";
        print_r($messages);

        // Disconnect from the server
        $mailbox->disconnect();
        die();

        $contacts = Contacts::where('user_id', auth()->user()->id)->get();
        $contactList = array();
        // make a json object for each contact
        foreach ($contacts as $contact) {
            $temp = [
                'id' => $contact->id,
                'name' => $contact->prefix . ' ' . $contact->first_name . ' ' . $contact->last_name,
                'nickname' => $contact->nickname,
                'company' => $contact->company,
                'job_title' => $contact->job_title,
                'department' => $contact->department,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'mobile' => $contact->mobile,
                'address' => $contact->address,
            ];
            $contactList[] = $temp;
        }

        // Imap Email
        $emailsIds = $mailbox->searchMailbox('ALL');
        // Loop through the email ids and fetch the email messages
        $INBOXemails = array();
        foreach ($emailsIds as $emailId) {
            // Fetch the email message
            $email = $mailbox->getMail($emailId);
            // Extract the information you want from the email message
            $senderName = $email->fromName;
            $senderAddress = $email->fromAddress;
            $subject = $email->subject;
            $bodyHTML = $email->textHtml;
            $hasAttachment = $email->hasAttachments();
            $receivedDate = $email->date;

            // Store the information in an array
            $INBOXemails[] = array(
                'id' => $emailId,
                'sender_name' => $senderName,
                'sender_address' => $senderAddress,
                'subject' => $subject,
                'body_html' => $bodyHTML,
                'has_attachment' => $hasAttachment,
                'received_date' => $receivedDate
            );
        }

        $data = compact('countInbox', 'countSent', 'countTrash', 'countFlagged', 'countArchived', 'countContacts', 'contactList', 'contactList', 'emails', 'emailsSent', 'emailsTrash', 'emailsFlagged', 'emailsArchived', 'INBOXemails');
        return view('app.email')->with($data);
    }

    // Function to send Email

    /**
     * @return Mailbox
     * @throws InvalidParameterException
     */
    private function getMailbox($folder = 'INBOX'): Mailbox
    {
        $host = env('IMAP_HOST');
        $port = env('IMAP_PORT');
        $encryption = env('IMAP_ENCRYPTION');
        $username = env('IMAP_USERNAME');
        $password = env('IMAP_PASSWORD');
        $mailbox = new Mailbox('{' . $host . ':' . $port . '/imap/' . $encryption . '}' . $folder, $username, $password);
        return $mailbox;
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'to' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        // send Email
        $subject = $request->subject;
        $body = $request->body;
        if (Mail::to($request->to)->send(new ComposeMail($subject, $body, ''))) {
            // Add record to database
            $mail = new Emails();
            $mail->user_id = auth()->user()->id;
            $mail->to = $request->to;
            $mail->subject = $request->subject;
            $mail->body = $request->body;
            $mail->is_sent = true;
            if ($mail->save()) {
                return redirect()->back()->with('success', 'Email sent successfully');
            } else {
                return redirect()->back()->with('error', 'Email not sent');
            }
        } else {
            return redirect()->back()->with('error', 'Email not sent');
        }
    }

    // Function to delete Email from Inbox

    public function addContact(Request $request)
    {
        $request->validate([
            'userid' => 'required|integer',
            'suffix' => 'string|nullable',
            'prefix' => 'string|nullable',
            'first_name' => 'string|required',
            'last_name' => 'string|required',
            'middle_name' => 'string|nullable',
            'nickname' => 'string|nullable',
            'company' => 'string|nullable',
            'job_title' => 'string|nullable',
            'department' => 'string|nullable',
            'email' => 'email|required',
            'phone' => 'string|nullable',
            'mobile' => 'string|nullable',
            'address' => 'string|nullable',
        ]);
        // create new contact
        $contact = new Contacts();
        $contact->user_id = $request->userid;
        $contact->suffix = $request->suffix;
        $contact->prefix = $request->prefix;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->middle_name = $request->middle_name;
        $contact->nickname = $request->nickname;
        $contact->company = $request->company;
        $contact->job_title = $request->job_title;
        $contact->department = $request->department;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->mobile = $request->mobile;
        $contact->address = $request->address;
        $contact->save();
        return redirect()->back()->with('success', 'Contact Added Successfully');
    }

    /**
     * @throws InvalidParameterException
     */
    public function deleteInboxEmail($id)
    {
        // Create a new IMAP mailbox instance and connect to the server
        $mailbox = $this->getMailbox();

        // Delete the email with the specified ID
        $mailbox->deleteMail($id);
        return redirect()->back()->with('success', 'Email Deleted Successfully');
    }

    public function deleteSmtpEmail($id)
    {
        $email = Emails::find($id);

        // soft delete
        $email->delete();
        return redirect()->back()->with('success', 'Moved to Trash Successfully');
    }

    public function deleteContact(int $contactId)
    {
        $contact = Contacts::find($contactId);
        if ($contact->user_id != auth()->user()->id)
            return redirect()->back()->with('error', 'You are not authorized to delete this contact');
        if ($contact->delete())
            return redirect()->back()->with('success', 'Contact Deleted Successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}
