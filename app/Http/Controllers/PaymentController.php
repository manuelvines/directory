<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentPlatform;
use App\Appointment;
use App\Resolvers\PaymentPlatformResolver;
use DB;

class PaymentController extends Controller
{
    //
    protected $paymentPlatformResolver;

    //el constructor recibe un objeto de PaymentPlatformResolver
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        /*$this->middleware('auth');*/
        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

   /*
    *Retorna el formulario de pago
    */
    public function checkout($slug){
          
        $paymentPlatform = PaymentPlatform::first();
        
        $appointment = DB::table('appointments')
                                ->join('experiences','appointments.experience_id', 'experiences.id')
                                ->select('experiences.title','experiences.experience_thumbnail','appointments.*')
                                ->where('appointments.id','=',$slug)
                                ->get();

           
  
        
        return view('frontend.checkout')
                        ->with('appointment',$appointment)
                        ->with('paymentPlatform',$paymentPlatform);
  
        

    }


    
    public function pay(Request $request)
    {

        $rules = [
            'value' => ['required','numeric','min:5'],
            'payment_platform' => ['required','exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        //Accedemos a PaymentPlatformResolver
        $paymentPlatform = $this->paymentPlatformResolver->resolverService($request->payment_platform);
        
        //guardamos el id del payment_platform
        session()->put('paymentPlatformId', $request->payment_platform);
        
     
        //metodo de App/Service/MercadoPago
        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {

        if(session()->has('paymentPlatformId')){
            
            //Accedemos a PaymentPlatformResolver, pero ya no temos acceso al request,
            //pero guardamos el id
            //en session
            $paymentPlatform = $this->paymentPlatformResolver
                ->resolverService(session()->get('paymentPlatformId'));
            

             
            //metodo de App/Service/MercadoPago
            return $paymentPlatform->handleApproval();
        }

        return redirect()
            ->route('pago')
            ->withErrors('No podemos recuperar su plataforma de pago. Por favor, inténtalo de nuevo');
    }

    public  function cancelled()
    {

        //UPDATE ORDER
        
    }


}
