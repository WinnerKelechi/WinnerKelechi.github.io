<?php
 
namespace App\Mail;
 

use App\User;
use App\Form;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

 
class AdminMail extends Mailable
{
    use Queueable, SerializesModels;
 
    public $adminmail;
    public $trial;
 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adminmail, $trial)
    {
        $this->adminmail = $adminmail;
        $this->trial = $trial;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      
            return $this->subject('New Free Trial Request Submitted')->markdown('emails.admin')->with([
               'admin' =>  $this->adminmail,
                'trial' => $this->trial
            ]);
    }
}

