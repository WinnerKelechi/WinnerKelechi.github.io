<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerForm extends Model
{
    // use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'company_name',
        'industry_of_business',
        'location',
        'how_did_you_hear',
        'means_of_identification',
        'identification_number',
        'bank_name',
        'bank_account_number',
        'rytegate_partnership_agreement',
        'agreement_date',
       
    ];
}

