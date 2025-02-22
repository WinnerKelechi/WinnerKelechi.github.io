<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function identificationType(){
        return $this->belongsTo('App\IdentificationType');
    }

    protected $fillable = ['partner_id'];
}
