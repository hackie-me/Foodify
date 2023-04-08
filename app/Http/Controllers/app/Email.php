<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Emails;
use Illuminate\Http\Request;
use PhpImap\Mailbox;

class Email extends Controller
{
    // Function to show Email Page
    public function index()
    {
        // Count
        $countInbox = 0;
        $countSent = 0;
        $countTrash = 0;
        $countFlagged = 0;
        $countArchived = 0;
        $countContacts = 0;

        $countInbox = Emails::where('user_id', auth()->user()->id)->get()->count();
        $countSent = Emails::where('user_id', auth()->user()->id)->where('is_sent', true)->count();
        $countTrash = Emails::where('user_id', auth()->user()->id)->onlyTrashed()->count();
        $countFlagged = Emails::where('user_id', auth()->user()->id)->where('is_flagged', true)->count();
        $countArchived = Emails::where('user_id', auth()->user()->id)->where('is_archived', true)->count();
        $countContacts = Contacts::where('user_id', auth()->user()->id)->get()->count();

        // Getting All Emails
        $emails = Emails::where('user_id', auth()->user()->id)->get();
        $emailsSent = Emails::where('user_id', auth()->user()->id)->where('is_sent', true)->get();
        $emailsTrash = Emails::where('user_id', auth()->user()->id)->onlyTrashed()->get();
        $emailsFlagged = Emails::where('user_id', auth()->user()->id)->where('is_flagged', true)->get();
        $emailsArchived = Emails::where('user_id', auth()->user()->id)->where('is_archived', true)->get();

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
        $host = env('IMAP_HOST');
        $port = env('IMAP_PORT');
        $encryption = env('IMAP_ENCRYPTION');
        $username = env('IMAP_USERNAME');
        $password = env('IMAP_PASSWORD');
        $mailbox = new Mailbox('{'.$host.':'.$port.'/imap/'.$encryption.'}INBOX', $username, $password);
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

    public function deleteContact(int $contactid)
    {
        $contact = Contacts::find($contactid);
        if ($contact->user_id != auth()->user()->id)
            return redirect()->back()->with('error', 'You are not authorized to delete this contact');
        if($contact->delete())
            return redirect()->back()->with('success', 'Contact Deleted Successfully');
        return redirect()->back()->with('error', 'Something went wrong');
    }
}