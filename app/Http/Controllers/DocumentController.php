<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Document;
use App\User;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    //


      /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        $document = User::find( Auth::ID())->document;

        
        if(!$document){

            return view('dashboard.docs.index');


        }else{


            return view('dashboard.docs.show');


        }
        
             
 
 
    }


    public function store(Request $request){


        $this->validate($request, [
            'folio'  => 'required',
            'front-doc' => 'required|image|max:500000',
            'back-doc' => 'required|image|max:500000'
            
        ]);

 
        if($request->file('front-doc') && $request->file('back-doc') ){
           
            $front_doc = Storage::disk('public')->put('docs' , $request->file('front-doc') );
           
            $back_doc = Storage::disk('public')->put('docs' , $request->file('back-doc') );

       }



       $document = new Document;
       
       $document->folio = $request->folio;
       $document->front_doc = asset($front_doc);
       $document->back_doc = asset($back_doc);
       $document->type = $request->type;

       $document->user_id = Auth::ID();

       $document->save();


     

       return redirect()->back()->withSuccess('Información actualizada de forma correcta.');



    }
}
