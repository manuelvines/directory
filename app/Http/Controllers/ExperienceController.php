<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Experience;
use App\User;
use App\Country;
use App\State;
use App\Tag;
use Illuminate\Support\Str as Str;


class ExperienceController extends Controller
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
      
        $experiences = User::find(Auth::ID())->experiences;
        

        return view('dashboard.experience.experiences')
                   ->with('experiences', $experiences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        $countries  = Country::all(); 
        $tags       = Tag::all(); 

        return view('dashboard.experience.experience')
        ->with('countries', $countries)
        ->with('tags', $tags);

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
            'title'                   => 'required',
            'experience_thumbnail'    => 'required|image|max:500000',

            'initial_schedule_hour'   => 'required',
            'initial_schedule_minute' => 'required',

            'final_schedule_hour'     => 'required',
            'final_schedule_minute'   => 'required',

            'max_people'              => 'required',
            'description'             => 'required',
            'tips'                    => 'required',
            'country_id'              => 'required',
            'state_id'                => 'required',
            'tags'                    => 'required|min:1'
            
        ]);

        $slug = Str::slug($request->title);
        
        $experience = Experience::where('slug',  $slug )->first();
        
        if($experience){
          return redirect()->back()->withErrors(['Ya existe un experiencia con el mismo nombre, intenta modificarlo un poco']);
        }

        if($request->file('experience_thumbnail')){
            $path = Storage::disk('public')->put('experiences' , $request->file('experience_thumbnail') );
        }

        $experience = new Experience;

        $experience->title  = $request->title;
        $experience->slug    = Str::slug($request->title);  

        $experience->experience_thumbnail = asset($path);

        $experience->initial_schedule =  $request->initial_schedule_hour .":".$request->initial_schedule_minute;

        $experience->final_schedule =  $request->final_schedule_hour .":". $request->final_schedule_minute ;

        $experience->duration = $request->hour_duration .":". $request->minutes_duration;
   

        $experience->max_people = $request->max_people;

        $experience->description = $request->description;

        $experience->restrictions = $request->restrictions;

        $experience->tips = $request->tips;

        $experience->extra_expenses = $request->extra_expenses;
        
        $experience->country_id = $request->country_id;

        $experience->state_id = $request->state_id;
        
        $experience->price = $request->price;

        $experience->estimated_price_per_person = $request->estimated_price_per_person; 

        $experience->user_id  = Auth::ID();

        $experience->save();

        $experience = Experience::find($experience->id);
        $experience->tags()->sync($request->tags);

    

        return redirect()->back()->withSuccess('Información actualizada de forma correcta.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $experience = Experience::where('user_id', Auth::ID())
         ->where('id',$id)->first();

         $countries = Country::all();
         $states = State::where('country_id', $experience->country_id)->get();
             
         $tags = Tag::all();
         $experiences_tags = Experience::find($experience->id)->tags;
       

         return view('dashboard.experience.experience-edit')
         ->with('experience', $experience)
         ->with('countries', $countries)
         ->with('tags', $tags)
         ->with('experiences_tags', $experiences_tags)
         ->with('states', $states);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'title' => 'required',
          
            'initial_schedule' => 'required',
            'final_schedule' => 'required',
            'max_people' => 'required',
            'description' => 'required',
            'tips' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'tags' => 'required|min:1'

            
        ]);

        $experience = Experience::where('user_id', Auth::ID())
        ->where('id',$id)->first();
        
        $experience->title  = $request->title;



        $experience->initial_schedule =  $request->initial_schedule;
        $experience->final_schedule =  $request->final_schedule;

        $experience->max_people = $request->max_people;

        $experience->description = $request->description;

        $experience->restrictions = $request->restrictions;

        $experience->tips = $request->tips;

        $experience->extra_expenses = $request->extra_expenses;

        $experience->price = $request->price;

        $experience->user_id  = Auth::ID();

        $experience->estimated_price_per_person = $request->estimated_price_per_person;
 
        $experience->country_id = $request->country_id;

        $experience->state_id = $request->state_id;
        


        $experience->save();

        $experience = Experience::find($experience->id);
        $experience->tags()->sync($request->tags);


        return redirect()->back()->withSuccess('Información actualizada de forma correcta.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $experience = Experience::find($id);

        $experience->delete();
        return redirect()->back()->withSuccess('Información actualizada de forma correcta.');

         
    
    }
}
