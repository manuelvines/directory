<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Experience;
use App\User;

class NotificationController extends Controller
{
    //

    public function show($id){


        $appointment = Appointment::find($id);

        $experience  = Experience::find($appointment->experience_id);
        
        $user_requesting = User::find($appointment->user_id);

        return view('dashboard.appointment.index')
               ->with('appointment',$appointment)
               ->with('experience',$experience)
               ->with('user_requesting', $user_requesting);

    }


    public function markAllasRead(){
        
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();

    }
}
