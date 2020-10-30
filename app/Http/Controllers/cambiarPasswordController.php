<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use App\User;
use auth;
use Illuminate\Support\Facades\Hash;

class cambiarPasswordController extends Controller
{
    public function vista(){
        return view("/auth/cambiarPassword");
    }

    public function actualizarPassword(request $request){
        $reglas = [
            "passwordActual"=>"required",
            "password"=>"required|confirmed|min:8",
        ];

        $mensajes = [
            "passwordActual.required" => "el Campo no puede estar vacio",
            "password.required" => "el campo no puede estar vacio",
            "password.min" => " la contraseña debe terner minimo 8 caracteres",
            "password.confirmed" => "las contraseñas no coinciden",
        ];

        $this->validate($request,$reglas,$mensajes);

        if(Hash::check($request->passwordActual, Auth::user()->contrasena)){

        $alumno=User::find(auth::id());

        $alumno->contrasena=hash::make($request->password);

        $alumno->save();

        return redirect("/cambiarPassword")->with("succes", "contraseña cambiada con exito");
     }else{
         return redirect("/cambiarPassword")->with("failed","los datos ingresados son incorrectos");
     }

    }

}
