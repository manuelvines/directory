<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Experience;

use App\Country;
use App\State;



class PublicController extends Controller
{
    //

     
    public function publicProfile($id)
    {
      

        $user = User::find($id);
        
        $profile = $user->profile;
        $languajes = $user->languajes;
        $experiences = $user->experiences;

        $country = Country::find($profile->country_id);
        $state   = State::find($profile->state_id);

     

        if($profile == null){

            return redirect()->route('profile.index')
            ->withSuccess('Antes de visitar tu perfil deberás completar tu perfil.');
        }

        //return $experiences;
     
        return view('frontend.detail')
        ->with('user', $user)
        ->with('profile', $profile)
        ->with('experiences', $experiences)
        ->with('languajes', $languajes)
        ->with('country', $country)
        ->with('state', $state);

    }
      

    public function publicExperience($slug){

        $experience = Experience::where('slug', $slug)->first();


        if($experience==null){

            return response(redirect(url('/')), 404);

        }
        
        $user =  User::find($experience->user_id);
        $languajes = $user->languajes;
        
        $country = $experience->country;
        $state   = $experience->state;;
 
 
        return view('frontend.detail-experience')
        ->with('experience', $experience)
        ->with('user', $user)
        ->with('country', $country)
        ->with('state', $state) 
        ->with('languajes', $languajes);



    }



}
