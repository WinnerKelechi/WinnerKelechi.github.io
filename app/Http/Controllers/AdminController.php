<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Form;
use App\Partner;
use App\PartnerForm;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{

    public function initadmin(){
       $user = User::all();

      if($user->isEmpty())
        {  
            $data['name'] = 'Nnamdi';
            $data['email'] = 'nnamdi.a@rytegate.com';
            $data['password'] = bcrypt('strideadmin');

            $user = User::create($data);
            return redirect('/login');
          }

      elseif($user ->isNotEmpty()){
        return redirect('/login');
      }

      else{
        return "Error occured at initialising admin function";
      }
            }
            


    public function index(Request $request){
      $length = $request->input('length', 5);
        $todos = Form::orderBy('id', 'DESC')->paginate($length);
        return view ('admin-home')->with('todos', $todos);
    }
    public function view_admin(Request $request){
      $length = $request->input('length', 5);
        $todos = User::orderBy('id', 'DESC')->paginate($length);
        return view ('admin-user')->with('todos', $todos);
    }

    public function partner_index(Request $request){
      $length = $request->input('length', 5);
        $todos = PartnerForm::orderBy('id', 'DESC')->paginate($length);
        return view ('admin-partner')->with('todos', $todos);
    }

    public function contact_index(Request $request){
      $length = $request->input('length', 5);
        $todos = Contact::orderBy('id', 'DESC')->paginate($length);
        return view ('admin-contact')->with('todos', $todos);
    }

      
    public function delete($id){
      
      Form::destroy($id);
      $todos = Form::orderBy('id', 'DESC')->paginate(5);
      return view ('admin-home')->with('todos', $todos);

    }

    public function admin_delete($id){
      
      User::destroy($id);
      $todos = User::orderBy('id', 'DESC')->paginate(5);
      return view ('admin-user')->with('todos', $todos);

    }
    public function partner_delete($id){
      
      PartnerForm::destroy($id);
      $todos = PartnerForm::orderBy('id', 'DESC')->paginate(5);
      return view ('admin-partner')->with('todos', $todos);

    }

    public function contact_delete($id){
      
      Contact::destroy($id);
      $todos = Contact::orderBy('id', 'DESC')->paginate(5);
      return view ('admin-contact')->with('todos', $todos);

    }



    public function search(Request $request){
      $searchby= $request->searchby;
      $search = $request->search;  
      
      $columns = ['first_name','last_name', "phone", "email"];

      switch ($searchby) {
        case 'General Search':
          $query = Form::query();
          foreach($columns as $column){
              $query->orWhere($column, 'LIKE',"%{$search}%");
          }
          $todos = $query->paginate(5);
          $todos->appends(['searchby'=> 'General Search','search' =>$search]);
          break;
        case 'First Name':
          $todos = Form::query()->where("first_name", 'LIKE',"%{$search}%")->paginate(5);
          $todos->appends(['searchby'=> 'First Name','search' => $search]);
          break;
        case 'Last Name':
          $todos = Form::query()->where("last_name_name", 'LIKE',"%{$search}%")->paginate(5);
          $todos->appends(['searchby'=> 'Last Name','search' => $search]);
          break;
        case 'Phone Number':
          $todos = Form::query()->where("phone", 'LIKE',"%{$search}%")->paginate(5);
          $todos->appends(['searchby'=> 'Phone Number','search' =>$search]);
          break;
        case 'Email Address':
          $todos = Form::query()->where("email", 'LIKE',"%{$search}%")->paginate(5);
          $todos->appends(['searchby'=> 'Email Address','search' =>$search]);
          break;
        case 'Company Name':
          $todos = Form::query()->where("company_name", 'LIKE',"%{$search}%")->paginate(5);
          $todos->appends(['searchby'=> 'Company Name','search' =>$search]);
          break;
        case 'Company Size':
          $todos = Form::query()->where("staff_strength", 'LIKE',"%{$search}%")->paginate(5);
          $todos->appends(['searchby'=> 'Company Size','search' =>$search]);
          break;
        default:
          return 'Error in search function';
      }


      return view ('admin-search')->with('todos', $todos);

      }


    public function partner_search(Request $request){
      $searchby= $request->searchby;
      $search = $request->search;   

      switch ($searchby) {
        case 'General Search':
          $query = PartnerForm::query();
          $columns = ['first_name', 'last_name', "phone", "email"];
          foreach($columns as $column){
              $query->orWhere($column, 'LIKE',"%{$search}%");
          }
          $todos = $query->paginate(5);
          break;
        case 'First Name':
          $todos = PartnerForm::query()->where("first_name", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Phone Number':
          $todos = Form::query()->where("phone", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Email Address':
          $todos = Form::query()->where("email", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Last Name':
          $todos = PartnerForm::query()->where("last_name", 'LIKE',"%{$search}%")->paginate(5);
          break;
        default:
          return 'Error in search function';
      }

      return view ('admin-partner-search')->with('todos', $todos);

      }


    public function contact_search(Request $request){
      $searchby= $request->searchby;
      $search = $request->search;   

      switch ($searchby) {
        case 'General Search':
          $query = Contact::query();
          $columns = ['name', "phone_number", "email","subject","message"];
          foreach($columns as $column){
              $query->orWhere($column, 'LIKE',"%{$search}%");
          }
          $todos = $query->paginate(5);
          break;
        case 'Name':
          $todos = Contact::query()->where("name", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Phone Number':
          $todos = Contact::query()->where("phone_number", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Email Address':
          $todos = Contact::query()->where("email", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Subject':
          $todos = Form::query()->where("subject", 'LIKE',"%{$search}%")->paginate(5);
          break;
        case 'Message':
          $todos = Form::query()->where("message", 'LIKE',"%{$search}%")->paginate(5);
          break;
        default:
          return 'Error in search function';
      }

      return view ('admin-contact-search')->with('todos', $todos);

      }

    public function admin_search(Request $request){
      $searchby= $request->searchby;
      $search = $request->search;   

      switch ($searchby) {
        case 'General Search':
          $query = User::query();
          $columns = ['name', "email",];
          foreach($columns as $column){
              $query->orWhere($column, 'LIKE',"%{$search}%");
          }
          $todos = $query->paginate(5);
          break;
        case 'Name':
          $todos = User::query()->where("name", 'LIKE',"%{$search}%")->paginate(5);
          break;

        case 'Email Address':
          $todos = User::query()->where("email", 'LIKE',"%{$search}%")->paginate(5);
          break;
    
        default:
          return 'Error in search function';
      }

      return view ('admin-admin-search')->with('todos', $todos);

      }

    public function exportUserCsv(Request $request){
        $fileName = 'users.csv';
        $users = User::orderBy('id', 'DESC')->get();;

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('name', 'email','date');

        $callback = function() use($users, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($users as $user) {
                $row['name']  = $user->name;
                $row['email']    = $user->email;
                $row['created_at']    = $user->created_at;

                fputcsv($file, array($row['name'], $row['email'], $row['created_at']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    public function exportTrialCsv(Request $request){
        $fileName = 'Free Trial Request.csv';
        $trials = Form::orderBy('id', 'DESC')->get();;

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('first_name','last_name', 'email','phone','company_name','staff_strength','date');

        $callback = function() use($trials, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($trials as $trial) {
                $row['first_name']  = $trial->first_name;
                $row['last_name']    = $trial->last_name;
                $row['email']    = $trial->email;
                $row['phone']    = $trial->phone;
                $row['company_name']    = $trial->company_name;
                $row['staff_strength']    = $trial->staff_strength;
                $row['created_at']    = $trial->created_at;

                fputcsv($file, array($row['first_name'], $row['last_name'], $row['email'], $row['phone'], $row['company-name'], $row['staff_strength'], $row['created_at']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    public function exportContactCsv(Request $request){
        $fileName = 'Contact List.csv';
        $contacts = Contact::orderBy('id', 'DESC')->get();;

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('name', 'email','phone_number','subject','message', 'date');

        $callback = function() use($contacts, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($contacts as $contact) {
                $row['name']  = $contact->name;
                $row['email']    = $contact->email;
                $row['phone_number']    = $contact->phone_number;
                $row['subject']    = $contact->subject;
                $row['message']    = $contact->message;
                $row['created_at']    = $contact->created_at;

                fputcsv($file, array($row['name'], $row['email'], $row['phone_number'], $row['subject'], $row['message'], $row['created_at']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    public function exportPartnerCsv(Request $request){
        $fileName = 'Partners List.csv';
        $partners = PartnerForm::orderBy('id', 'DESC')->get();;

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('first_name', 'last_name', 'email', 'phone','date');

        $callback = function() use($partners, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($partners as $partner) {
                $row['first_name']  = $partner->first_name;
                $row['last_name']    = $partner->last_name;
                $row['email']    = $partner->email;
                $row['phone']    = $partner->phone;
                $row['created_at']    = $partner->created_at;

                fputcsv($file, array($row['first_name'], $row['last_name'], $row['email'], $row['phone'], $row['created_at']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }



         // public function update($id,Request $request){

    //     $todo = Form::findorFail($id);
    //     $todo ->full_name = $request->full_name;
    //     $todo ->phone = $request->phone;
    //     $todo ->email = $request->email;
    //     $todo ->company_name = $request->company_name;
    //     $todo ->company_address = $request->company_address;
    //     $todo ->company_email = $request->company_email;
    //     $todo ->company_phone = $request->company_phone;
    //     $todo ->contact_person = $request->contact_person;
    //     $todo ->staff_strength = $request->staff_strength;
    //     $todo ->preferred_mode_of_communication = $request->preferred_mode_of_communication;
    //     $todo ->do_you_have_an_erp = $request->do_you_have_an_erp;
    //     $todo->save();

    //     $todos = Form ::where('id',$id)->get();
    //     return view ('admin-update')->with('todos', $todos);
  
    //   }

       // public function view($id){
    //     if(!Form::find($id)){
    //       return "Item not found";
    //     }
    //     $todo = Form ::where('id',$id)->get();
    //     return view ('admin-update')->with('todos', $todo);
        
    //   }
}
