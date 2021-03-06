<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'source'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

           

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function document()
    {
        return $this->hasOne('App\Document');
    }

    public function country(){
        return $this->belongsTo('App\Country');
    }

    public function languajes()
    {
        return $this->belongsToMany('App\Languaje')->withTimestamps();
    }


    public function experiences(){

        return $this->hasMany('App\Experience');
 
    }


}
