<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartnerFormRequest;
use App\Http\Requests\UpdatePartnerFormRequest;
use App\Partner;
use App\IdentificationType;
use DataTables;

class PartnersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function partnersDataTable(){
        $model = Partner::select('*');
        return DataTables::eloquent($model)->make(true);
    }

    public function index(){
        return view('partners.index');
    }

    public function add(){
        $identificationTypes = IdentificationType::all();
        return view('partners.add', compact('identificationTypes'));
    }

    public function randomNumber($partner){
        return "SA-00" . $partner->id;
    }

    public function store(PartnerFormRequest $request){
        $partner = new Partner();

        //$partner->partner_id = $this->randomNumber($partner);
        $partner->first_name = $request->first_name;
        $partner->last_name = $request->last_name;
        $partner->phone_no = $request->phone_no;
        $partner->alternate_no = $request->alternate_no;
        $partner->email = $request->email;
        $partner->occupation = $request->occupation;
        $partner->address = $request->address;
        $partner->identification_type_id = $request->identification_type_id;
        $partner->identification_number = $request->identification_number;
        $partner->bank = $request->bank;
        $partner->account_no = $request->account_no;
        $partner->acceptance_date = $request->acceptance_date;
        $partner->gender = $request->gender;
        $partner->dob = $request->dob;
        $partner->acceptance_date = $request->acceptance_date;

        $partner->save(); 
        $partner->update(['partner_id' => $this->randomNumber($partner)]);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->image->store('partners/passport', 'public');
            $partner->image_path ='/storage/' . $imagePath;
            $partner->save();
        }
        return redirect()->route('partner.index')->with('success', 'Strategic alliance partner was successfully added');
        
    }

    public function show(Partner $partner){
        return view('partners.show', compact('partner'));
    }

    public function edit(Partner $partner){
        $identificationTypes = IdentificationType::all();
        return view('partners.edit', compact('partner', 'identificationTypes'));
    }

    public function update(Partner $partner, UpdatePartnerFormRequest $request){
        $partner->partner_id = $request->partner_id;
        $partner->first_name = $request->first_name;
        $partner->last_name = $request->last_name;
        $partner->phone_no = $request->phone_no;
        $partner->alternate_no = $request->alternate_no;
        $partner->email = $request->email;
        $partner->occupation = $request->occupation;
        $partner->address = $request->address;
        $partner->identification_type_id = $request->identification_type_id;
        $partner->identification_number = $request->identification_number;
        $partner->bank = $request->bank;
        $partner->account_no = $request->account_no;
        $partner->acceptance_date = $request->acceptance_date;
        $partner->gender = $request->gender;
        $partner->dob = $request->dob;
        $partner->acceptance_date = $request->acceptance_date;

        if($partner->save()){
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imagePath = $request->image->store('partners/passport', 'public');
                $partner->image_path ='/storage/' . $imagePath;
                $partner->save();
            }
            return redirect()->route('partner.index')->with('success', 'Strategic alliance partner was successfully updated');
        }
    }

}
