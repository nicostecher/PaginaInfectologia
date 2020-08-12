<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use app\login;
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
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function validator(array $data)
     {
         $message=[
             "email.required" => 'El :attribute no puede estar vacio',
             "contrasena.required" => 'El :attribute no puede esta vacio'
         ];

         return Validator::make($data, [
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'contrasena' => ['required', 'string', 'min:8', 'confirmed'],
         ],$message);
     }

     public function traerUsuario(){
         $usuario=User::all();

         $vac=compact("usuario");


      return view("login",$vac);

     }

     public function reconocerEmail($email){
       $email = User::find($email);
       $vac=compact("email");
       if ($email == email) {
         return view("login",$vac);
       }
     }

     public function reconocerContrasena($contrasena){
       $contrasena = User::find($contrasena);
       if ($contrasena == contrasena) {
         return view("index");
       }
     }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
