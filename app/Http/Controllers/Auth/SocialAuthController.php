<?php
 
namespace App\Http\Controllers\Auth;
 
use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
class SocialAuthController extends Controller
{
    // Metodo encargado de la redireccion a Facebook
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    
    
    }
    

    

            // Metodo encargado de obtener la información del usuario
            public function handleProviderCallback($provider)
            {
                try{
               
                            // Obtenemos los datos del usuario
                        $social_user = Socialite::driver($provider)->user(); 

                        // Comprobamos si el usuario ya existe
                        if ($user = User::where('email', $social_user->email)->first()) { 
                            return $this->authAndRedirect($user); // Login y redirección
                        } else {  

                            // En caso de que no exista creamos un nuevo usuario con sus datos.
                            $user = User::create([
                                'name' => $social_user->name,
                                'email' => $social_user->email,
                                'avatar' => $social_user->avatar,
                                'source' => 'Facebook',
                            ]);
                
                            return $this->authAndRedirect($user); // Login y redirección
                        }

                        }catch (Exception $e) {
                            return "Excepción capturada" .  $e->getMessage();
                    }
            }


    // Login y redirección
    public function authAndRedirect($user)
    { 

        try{

            Auth::login($user);
            return redirect()->to('/home#');

        }catch (Exception $e) {
           return "Excepción capturada" .  $e->getMessage();
        }
    
    }
}
 