<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


    
    class ContactController extends Controller { 

      public function getContact() { 

       return view('contact_us'); 
      } 

     public function saveContact(Request $request) { 
        $users = json_decode(User::all());
        $contact_us_mail = '';



        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone_number' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

       /*Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'subject' => $request->get('subject'),
                 'phone_number' => $request->get('phone_number'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('mail.securishieldtestserver.com
');
               });*/

               foreach($users as $user){
                Mail::to($user->email)->send(new \App\Mail\ContactUsMail($contact_us_mail, $contact));
             }
        
            return back()->with('success', 'Thank you! We received your message.');

    }
}