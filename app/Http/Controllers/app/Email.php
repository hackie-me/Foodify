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
        $folder_name = 'INBOX';
        $messages = [];
        try {
            $mailbox = $this->getMailbox('INBOX');
            $folder_count = $mailbox->countMails();
            $emailsIds = $mailbox->searchMailbox('ALL');
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
                $messages[] = array(
                    'id' => $emailId,
                    'sender_name' => $senderName,
                    'sender_address' => $senderAddress,
                    'subject' => $subject,
                    'body_html' => $bodyHTML,
                    'has_attachment' => $hasAttachment,
                    'received_date' => $receivedDate
                );
            }
        } catch (InvalidParameterException $e) {
            echo $e->getMessage();
        }

        // Getting Contact List
        $contactList = $this->getContactList();

        $data = compact('contactList', 'messages', 'folder_count', 'folder_name');
        return view('app.email.inbox')->with($data);
    }

    // Function to get Contact List
    private function getContactList(){
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

        return $contactList;
    }

    // Get Email by Folder Name
    public function getFolderEmails($folder_name){
        $messages = [];
        $mailbox = $this->getMailbox($folder_name);
        $folder_count = $mailbox->countMails();
        $emailsIds = $mailbox->searchMailbox('ALL');
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
            $messages[] = array(
                'id' => $emailId,
                'sender_name' => $senderName,
                'sender_address' => $senderAddress,
                'subject' => $subject,
                'body_html' => $bodyHTML,
                'has_attachment' => $hasAttachment,
                'received_date' => $receivedDate
            );
        }

        // Getting Contact List
        $contactList = $this->getContactList();

        $data = compact('messages', 'folder_name', 'folder_count', 'contactList');
        return view('app.email.folder')->with($data);

    }

    // Function to send Email
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
    public function deleteEmail($id){
        $mailbox = $this->getMailbox();
        $mailbox->deleteMail($id);
        return redirect()->back()->with('success', 'Email deleted successfully');
    }

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
