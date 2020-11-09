<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Experience;
use App\Tag;
use App\Country;
use App\State;
use DB;


class PublicController extends Controller
{
    //
    
    public function index(){

       $tags = Tag::all();
       $countries = Country::all();
       
       return view('welcome')
         ->with('tags',$tags)
         ->with('countries',$countries);
    }
     
    public function publicProfile($id)
    {
      

        $user = User::find($id);
        $profile = $user->profile;
        
        if($profile == null){

            return redirect()->route('profile.index')
            ->withSuccess('Antes de visitar tu perfil deberás completar tu perfil.');
        }

        $languajes = $user->languajes;
        $experiences = $user->experiences;

        $country = Country::find($profile->country_id);
        $state   = State::find($profile->state_id);
       
        

     
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


    public function showExperiencesByTag($id){

        $experiences = Tag::find($id)->experiences;  
        
        $tags  =  Tag::all();

        return view('frontend.filter')
               ->with('experiences',  $experiences )
               ->with('tags',  $tags );
    }
    
    public function search(){

        //$_REQUEST['query'] . $_REQUEST['country_id'] . $_REQUEST['tag'];
        $tags  =  Tag::all();

        $experiences = DB::table('experiences')
                       ->select('experiences.title','experiences.slug','experiences.experience_thumbnail', 'users.name', 'users.avatar', 'experiences.description','countries.name as country','states.name as state')
                       ->join('countries','countries.id','=','experiences.country_id')
                       ->join('users','users.id','=','experiences.user_id')
                       ->join('states','states.id','=','experiences.state_id')
                       ->where('experiences.title','like',  '%' . $_REQUEST['query'] .'%' )
                       ->orWhere('experiences.country_id','=', $_REQUEST['country_id'])
                       ->orWhere('experiences.country_id','=', $_REQUEST['country_id'])
                       ->paginate(20);
            
                  
        
                       return view('frontend.filter')
                       ->with('experiences',  $experiences )
                       ->with('tags',  $tags );


    }


}
