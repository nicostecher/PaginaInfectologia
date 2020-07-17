<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\clase;

class ClasesController extends Controller
{
    public function vista(){
        return view("/clases");
    }


    public function cargarClase(request $req){

        $reglas= [
            "nombre"=>"string|min:3",
            "archivo"=>"file",
        ];

        $mensajes=[
            "string"=> "El campo :attribute debe ser un texto",
            "min"=> "el  campo :attribute debe tener minimo :min",
        ];
       
        $this->validate($req, $reglas, $mensajes);
       
        $claseNueva= new clase();

        $ruta=$req->file("archivo")->store("public");
        $nombreArchivo=basename($ruta);
        /* CUANDO HAYA BASE DE DATOS NO OLVIDAR DE HACE PHP:STORAGE LINK PARA QUE SEAN PUBLICAS EN EL HTML*/
        $claseNueva->nombre= $req["nombre"];
        $claseNueva->archivo=$nombreArchivo;
      

        $claseNueva->save();

        return redirect("/clases");
    }
        
    
    public function borrarClase(request $req){  
         $clase=Clase::find($req["nombre"]);

         $clase->delete();

         return redirect("/clases");
        }






    };



