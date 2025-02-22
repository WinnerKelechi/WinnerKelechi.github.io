<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_us_mail;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_us_mail, $contact)
    {
        $this->contact_us_mail = $contact_us_mail;
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact Request Submitted')->markdown('emails.contact-us')->with([
            'contact_us' =>  $this->contact_us_mail,
            'contact' => $this->contact
        ]);
    }
}
