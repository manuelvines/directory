<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Illuminate\Support\Facades\Auth;


class PhotoController extends Controller
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

    public function changeAvatarView()
    {
         return view('dashboard.change-avatar');
    }


    public function changeAvatarUpdate(Request $request){
        $this->validate($request, [
            'avatar' => 'required|image|max:500000'
        ]);
        
        if($request->file('avatar')){
             $path = Storage::disk('public')->put('avatar' , $request->file('avatar') );
             $user = User::find(Auth::ID());
             $user->avatar = asset($path);
             $user->save();
        }

        return redirect()->back()->withSuccess('Información actualizada de forma correcta.');
    } 



}
