<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Appointment;
use App\Experience;
use App\User;
use App\Events\AppointmentRequestEvent;

class AppointmentController extends Controller
{
    //

    public function index(){
        return "citas";

    }

    public function store(Request $request)
    {

        $experience = Experience::find($request->experience_id)->first();

    
        
        //usuario intenta hacer cita asi mismo
        if($experience->user_id ===Auth::ID() ){
            return "no puedes hacer una cita a ti mismo";
        }


        $appointment = new Appointment;

        $appointment->date              = $request->date;
        $appointment->initial_schedule  = $request->initial_schedule_hour .":".  $request->initial_schedule_minute;
        $appointment->duration          = $experience->duration;
        $appointment->people            = $request->people;
        $appointment->amount_by_person  = 10;
        $appointment->total             = $request->people * 10;
        $appointment->status            = 0;
        $appointment->visitor_id        = Auth::ID();
        $appointment->guide_id          = $experience->user_id;
        $appointment->experience_id     = $request->experience_id;
        $appointment->save();

        //$hostfriend->notify(new AppointmentRequest($appointment));
        event(new AppointmentRequestEvent($appointment));

        
        return view('frontend.confirmed');
    

    }



    public function accept($id){

          $appointment = Appointment::find($id);     
          $appointment->status = 1;
          $appointment->save();
          return "Confirma la cita y manda correo de pago, Necesitamos las cuentas";
    
    }


    public function reject($id){
        $appointment = Appointment::find($id);     
        $appointment->status = 1;
        $appointment->save();
        return "No aceptaste la cita";
    }
}
