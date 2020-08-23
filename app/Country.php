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

}
