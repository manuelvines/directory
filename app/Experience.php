<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //


    public function user(){

        return $this->belongsTo('App\User');
 
    }


    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function state(){
        return $this->belongsTo('App\State');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    
}
