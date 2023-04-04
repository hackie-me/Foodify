<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComposeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mail_subject = 'Compose Mail';
    public $mail_body = '';
    public $mail_attachments = '';
    public $mail_to = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mail_subject, $mail_body, $mail_attachments = '')
    {
        $this->mail_subject = $mail_subject;
        $this->mail_body = $mail_body;
        $this->mail_attachments = $mail_attachments;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Compose Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.compose',
        );
    }

    /**
     * Get the mail_attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->mail_subject)
            ->view('emails.compose')
            ->with([
                'subject' => $this->mail_subject,
                'body' => $this->mail_body,
                'attachments' => $this->mail_attachments,
            ]);
    }
}
