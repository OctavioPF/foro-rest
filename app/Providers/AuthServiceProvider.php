<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\JWT;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    


    public function boot()
    {
        // Here you may define how you wish users to be authenticated for your Lumen
        // application. The callback which receives the incoming request instance
        // should return either a User instance or null. You're free to obtain
        // the User instance via an API token or any other method necessary.

        $this->app['auth']->viaRequest('api', function ($request) {
            $token = $request->header('Authorization');//Bearen dfiodo4fsdf3fo4f 
            if(strstr($token,"Bearer")){// buscar cadena dentro de un cadena 
                $token = substr($token,7);// extraer la acdena a part del 7 
            }
            if(!$token) return;// retornar error 
            if(JWT::verify($token,  env('JWT_SECRET_KEY'))==0){//si el token ees valido 
                return JWT::get_data($token,env('JWT_SECRET_KEY'));// devolviendo datos del usuario
            }
            // if ($request->input('api_token')) { return User::where('api_token', $request->input('api_token'))->first();  } 
        });
    }


}
