<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Form;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CustomerFormRequest;
use Illuminate\Foundation\Http\FormRequest as HttpFormRequest;


class FormController extends Controller
{
    public function index(){
        return view('customer-form');
   }
   
    public function add(Request $request) {
        $users =  json_decode(User::all());
        $adminmail = '';

        
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'company_name' => 'required|string',
            'staff_strength' => 'required|string'
        ]);
        $new_form = new Form;


        
        $new_form->first_name = $request->first_name;
        $new_form->last_name = $request->last_name;
        $new_form->phone = $request->phone;
        $new_form->email = $request->email;
        $new_form->company_name = $request->company_name;
        $new_form->staff_strength = $request->staff_strength;
        
        $new_form->save();

        // return $users;

        foreach($users as $user){
            Mail::to($user->email)->send(new \App\Mail\AdminMail($adminmail, $new_form));
         }

        return back()->with('success', 'Thank you! We received your message.');
    }

}

?>