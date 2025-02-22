<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartnerForm;
use App\User;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Nullable;

class PartnerFormController extends Controller
{
    public function index(){
        return view('partner-form');
   }

   public function add(Request $request) {
        //dd("i'm here");
        $users =  json_decode(User::all());
        $partnermail = '';

        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            // 'company_name' => 'nullable|string',
            // 'industry_of_business' => 'required|string',
            // 'location' => 'required|string',
            // 'how_did_you_hear' => 'required|string',
            
        ]);
        
        
        
        $new_form = new PartnerForm;

        $new_form->first_name = $request->first_name;
        $new_form->last_name = $request->last_name;
        $new_form->email = $request->email;
        $new_form->phone = $request->phone;
        // $new_form->company_name = $request->company_name;
        // $new_form->industry_of_business = $request->industry_of_business;
        // $new_form->location = $request->location;
        // $new_form->how_did_you_hear = $request->how_did_you_hear;
        // $new_form->location = $request->location;
        // $new_form->how_did_you_hear = $request->how_did_you_hear;


        $new_form->save();

        // var_dump(request('name'));

        // return Form::create($new_form);
    foreach($users as $user){
        Mail::to($user->email)->send(new \App\Mail\PartnerMail($partnermail, $new_form));
     }


    // return Form::create($new_form);
    return back()->with('success', 'Thank you! We received your Application.');

}
}
