<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function licenseType(){
        return $this->belongsTo(LicenseType::class);
    }
}
