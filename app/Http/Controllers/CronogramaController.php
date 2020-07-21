<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cronograma;

class CronogramaController extends Controller
{
    public function vista(){
        return view("/cronograma");
    }

    
    public function mostrarCronograma(){
        $cronogramas=cronograma::all();

        $vac=compact("cronogramas");

        return view("cronograma",$vac);

    }


    public function cargarCronograma( request $req){

        $reglas=[
            "nombre" =>"string|min:3|required",
            "archivo"=>"file|required"
    ];

        $mensajes=[
            "string"=>"El campo :attribute no puede estar vacio",
            "min"=>"El campo :attribute debe tener un minimo de :min",
            "required"=>" el campo no puede estar vacio",

        ];

        $this->validate($req,$reglas,$mensajes);

        $cronogramaNuevo= new cronograma();

        $ruta=$req->file("archivo")->store("public");
        $nombreArchivo=basename($ruta);

        $cronogramaNuevo->nombre=$req["nombre"];
        $cronogramaNuevo->archivo=$nombreArchivo;

        $cronogramaNuevo->save();

        return redirect("/cronograma");
    }
}
