<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PartnerFormRequest extends FormRequest
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
        $partnerId = '';
        if($this->route('partner')){
            $partnerId = ', ' . $this->route('partner')->id;
        }

        return [
            // 'partner_id' => 'required|string|unique:partners,partner_id' . $partnerId,
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_no' => 'required|digits_between:7,15|unique:partners,phone_no' . $partnerId,
            'alternate_no' => 'digits_between:7,15|unique:partners,alternate_no' . $partnerId,
            'email' => 'required|string|email|max:100|unique:partners,email' . $partnerId,
            'occupation' => 'required|string|max:50',
            'address' => 'required|string|max:192',
            'identification_type_id' => 'required|exists:identification_types,id',
            'identification_number' => 'required|string|',
            'bank' => 'required|string',
            'account_no' => 'required|digits:10|unique:partners,account_no' . $partnerId,
            'gender' => 'required|string|',
            'dob' => 'required|date',
            'acceptance_date' => 'required|date',
            'image' => [Rule::requiredIf($this->route('partner') == null),'image', 'max:5000'],// 'required|'
        ];
    }
}
