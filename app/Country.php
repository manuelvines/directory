<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    protected $fillable = ['name','nationality','flag','description'];


    public function profiles(){
         return $this->hasMany('App\Profile');
    }

    public function states(){
        return $this->hasMany('App\State');

    }

    public function experiences(){
        return $this->hasMany('App\Experience');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

}
