<?php

namespace App\Http\Controllers;

use App\Mail\RequestDemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestDemoController extends Controller
{
    public function requestDemo(Request $request){
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|max:100',
            'company' => 'required|max:100',
            'phone' => 'required|max:20',
            'date' => 'required',
        ]);

        Mail::to('info@rytegate.com')
//            ->cc('')
            ->send(new RequestDemoMail($request));

        return redirect()->route('demo')->with('success');
    }
}
