<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasesController extends Controller
{
    public function vista(){
        return view("/clases");
    }
}
