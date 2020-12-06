<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\AppointmentRequest;
use Illuminate\Support\Facades\Mail;


class MessagesController extends Controller
{

    //Envia un correo de solicitud de experiencia
    public function AppointmentRequest(){


        Mail::to('cacvmanu@gmail.com')->send(new AppointmentRequest);
         
        return 'Mensaje enviado';

    }


}
