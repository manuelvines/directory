<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\AppointmentRequest;
use App\User;
use App\Experience;
use Auth;

class AppointmentRequestListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
       /*Notificacion Lleva al usuario que dueño de la experiencia*/
       //$user = Experience::find($event->appointment->id)->user;

        $user = Experience::find($event->appointment->experience_id)->user;

       
        $user->notify(new AppointmentRequest($event->appointment));

    }
}
