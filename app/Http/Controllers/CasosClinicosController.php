<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasosClinicosController extends Controller
{
    public function vista(){
        return view("/casosClinicos");
    }
}
