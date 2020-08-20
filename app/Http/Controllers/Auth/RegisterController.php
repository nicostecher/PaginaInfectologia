<?php

//zoe, esta linea namespace la tenías escrita asi namespace App\Http\Controllers\Auth\loginController. le saque esa ultima parte y la deje como esta abajo, y ahi corrio.//

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Register;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */




   public function validator(array $data)
    {
     $message=[
            'nombre.required'=> 'El :attribute no puede estar vacio',
           "apellido.required" => 'El :attribute no puede estar vacio',
           "legajo.required" => 'El :attribute no puede estar vacio',
            "email.required" => 'El :attribute no puede estar vacio',
           "contrasena.required" => 'El :attribute no puede esta vacio',
            "contrasena.min" =>"La :attribute debe tener al menos 8 caracteres",
            "confirmar-contrasena.confirmed" =>"Las contraseñas no coinciden",
        ];

        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'legajo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contrasena' => ['required', 'string', 'min:8'],
            'confirmar-contrasena' => ['required', 'string', 'min:8', 'confirmed'],
        ],$message);
      }




/**
    *  @param  array  $data
    *  @return \App\User
*/



   public function crearUsuario(array $data)
    {
       $usuarioNuevo =  User::create([
          'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
          'legajo' => $data['legajo'],
          'email' => $data['email'],
          'contrasena' => Hash::make($data['contrasena']),
         ]);
       $usuarioNuevo->save();
    }

    public function agregarUsuario(){

    }
    }
