<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\novedades;

class NovedadesController extends Controller
{
    public function nuevaNoticia(){
        return view("/cargarNovedades");

    }
}
