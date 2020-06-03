<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /* methode dupliquer qui permettra de se connecter sois avec le login, sois avec le email*/
    public function username()
    {
            /*on verifie le login entrez si c'est une adresse ou une chaine simple*/
        /*   if (filter_var($request->login, FILTER_VALIDATE_EMAIL)) {

               return 'email';

            } else {

                 return 'username';
            }*/

            /* stockquer ce que le user a entre au niveau de login*/
            $login=request('login');

             /* recuperer le type de valeur entré username or email*/
            $field=filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

            /* injecter dans la requete la clé valeur email ou username suivit de ce que le user a entrez parce que au niveau de la validation on que le login et le mot de passe*/

            request()->merge([ $field => $login]);

            return $field;
       
    }
}
