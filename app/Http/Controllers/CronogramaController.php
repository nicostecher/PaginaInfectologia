<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronogramaController extends Controller
{
    public function vista(){
        return view("/cronograma");
    }
}
