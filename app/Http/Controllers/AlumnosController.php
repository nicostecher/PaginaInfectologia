<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AlumnosController extends Controller
{
    public function mostrarAlumnos(){
        $alumnos=User::all();

        $vac=compact("alumnos");

        return view("/listadoAlumnos",$vac);
    }
}
