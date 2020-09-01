<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class InvitadosController extends Controller
{
    public function Activar($codigo){
        $usuarios=User::where("codigo",$codigo);
        $exist = $usuarios->count();
        $usuario = $usuarios->first();
        
        if($exist == 1 && $usuario->active == 0 ){
            $id = $usuario->id;
            return view("/auth/completarDatos", compact("id"));
        
        }else{
            return redirect('/');
    };
}

protected function validator(array $data)
{
  $message=[
  
    "contrasena.required" => 'El :attribute no puede esta vacio',
    "contrasena.confirmed" =>"Las contraseñas no coinciden",
    "contrasena.min" =>"La :attribute debe tener al menos 8 caracteres",

];

return Validator::make($data, [
    'contrasena' => ['required', 'string', 'min:8', 'confirmed'],
   
],$message);

}


public function complete(Request $request, $id){
    $usuario = user::find($id);
    $usuario->contrasena = Hash::make($request['contrasena']);
    $usuario->activo = 1;
    
    $usuario->save();

    return redirect("/login");
}
}
