<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    // use HasFactory;

    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'company_name',
        'company_address',
        'company_email',
        'company_phone',
        'contact_person',
        'staff_strength',
        'preferred_mode_of_communication',
        'do_you have_an_erp',
    ];
}
?>