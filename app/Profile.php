<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //



    public function user(){
        return $this->hashOne('App\User');
    }
     
    public function country(){
       return $this->belongsTo('App\Country');
    }

    public function state(){
        return $this->belongsTo('App\State');
    }
}
