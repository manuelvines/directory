<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Experience;



class PublicController extends Controller
{
    //

     
    public function publicProfile($id)
    {
      

        $user = User::find($id);
        
        $profile = $user->profile;
        $languajes = $user->languajes;
         
        $experiences = $user->experiences;

        //return $experiences;
     
        return view('frontend.detail')
        ->with('user', $user)
        ->with('profile', $profile)
        ->with('experiences', $experiences)
        ->with('languajes', $languajes);

    }
      

    public function publicExperience($id){

        $experience = Experience::find($id);
        $user =  User::find($experience->user_id);
        $languajes = $user->languajes;
         

        //return $experiences;
     
        return view('frontend.detail-experience')
        ->with('user', $user)
        ->with('experience', $experience)

        ->with('languajes', $languajes);



    }



}
