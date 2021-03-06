<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Country;
use App\State;
use App\Languaje;


class ProfileController extends Controller
{

    /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile = User::find(Auth::ID())->profile;
        $countries = Country::all(); 
        
        /**Perfil primera vez */
        if(!$profile){
           
     
            $languajes = Languaje::all();       
            return view('dashboard.profile.profile')
                ->with([
                'countries'=>$countries, 
                'languajes' => $languajes
            ]);

        }
        
  

       $languajes = Languaje::all();    
       $languajes_user = User::find(Auth::ID())->languajes;
       $states = Country::find($profile->country_id)->states;
     

      

       return view('dashboard.profile.profile-edit')
        ->with([
        'profile'=>$profile,
        'countries'=>$countries, 
        'states' => $states,
        'languajes' => $languajes,
        'languajes_user' => $languajes_user
         ]);
 
    
    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $this->validate($request, [
         
            'alternative_email' => 'required|unique:profiles',
            'birth' => 'required|date',
            'bio' => 'required',
            'country_id' => 'required',
            'languajes' => 'required|min:1'
        ]);
        
     

        $profile = new Profile;
        $profile->gender = $request->gender;
        $profile->alternative_email = $request->alternative_email;
        $profile->birth = $request->birth;
        $profile->bio = $request->bio;
        $profile->country_id = $request->country_id;
        $profile->state_id = $request->state_id; 
        $profile->user_id = Auth::ID();

         
        
        $user = User::find(Auth::ID());
        $user->languajes()->sync($request->languajes);
        $profile->save();

        return redirect()->back()->withSuccess('Información actualizada de forma correcta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //

        return $profile;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //

        $this->validate($request, [
            'birth' => 'required|date',
            'bio' => 'required',
            'country_id' => 'required',
            'languajes' => 'required|min:1'
        ]);
        
    

        $profile->gender = $request->gender;
        $profile->alternative_email = $request->alternative_email;

        $profile->birth = $request->birth;
        $profile->bio = $request->bio;

        $profile->user_id = Auth::ID();

        $profile->country_id = $request->country_id;
        $profile->state_id = $request->state_id; 

        
        $user = User::find(Auth::ID());
        
        $user->languajes()->sync($request->languajes);

        $profile->save();

        return redirect()->back()->withSuccess('Información actualizada de forma correcta.');

    }

    public function geolocation(){
        return view('dashboard.profile.geolocation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
