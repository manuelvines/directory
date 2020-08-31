<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable = ['name','country_id'];

    public function profiles(){
        return $this->hasMany('App\Profile');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function experiences(){
        return $this->hasMany('App\Experience');
    }


}
