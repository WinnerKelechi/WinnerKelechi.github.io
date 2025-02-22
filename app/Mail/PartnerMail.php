<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $partnermail;
    public $partner;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($partnermail, $partner)
    {
        $this->partnermail = $partnermail;
        $this->partner = $partner;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Partnership Request Submitted')->markdown('emails.partner')->with([
            'partner_mail' =>  $this->partnermail,
            'partner' => $this->partner
        ]);
    }
}
