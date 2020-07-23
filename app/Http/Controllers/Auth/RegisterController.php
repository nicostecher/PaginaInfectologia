<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected function validator(array $data)
    {

      $message=[
            'nombre.required'=> 'El :attribute no puede estar vacio',
            "apellido.required" => 'El :attribute no puede estar vacio',
            "legajo.required" => 'El :attribute no puede estar vacio',
            "email.required" => 'El :attribute no puede estar vacio',
            "contrasena.required" => 'El :attribute no puede esta vacio',
            "contrasena.confirmed" =>"Las contraseñas no coinciden",
            "contrasena.min" =>"La :attribute debe tener al menos 8 caracteres",
        ];

        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'legajo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contrasena' => ['required', 'string', 'min:8', 'confirmed'],
            'confirmar-contrasena' => ['required', 'string', 'min:8', 'confirmed'],


        ],$message);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'legajo' => $data['legajo'],
            'email' => $data['email'],
            'contrasena' => Hash::make($data['contrasena']),
        ]);
    }
}
