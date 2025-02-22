<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
       if ( ! Newsletter::isSubscribed($request->user_email) ) {
        Newsletter::subscribe($request->user_email);
            return redirect('newsletter')->with('success', 'Thank you for Subscribing to our Newsletter');
    }
        return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed! But...');
            
    }
}