<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Name' => 'required|Text',
            'Phone_number' => 'required|bigInteger',
            'Email' => 'required|email',
            'Company_name' => 'nullable|Text|max:100',
            'Company_address' => 'nullable|Text|max:255',
            'Company_email' => 'required|email',
            'Company_Phone_number' => 'required|bigInteger',
            'Contact_person' => 'required|Text',
            'Staff_strength' => 'nullable|string',
            'Preferred_mode_of_communication' => 'required|string',
            'Do_you_have_an_ERP' => 'required|string'
        ];
    }
}
