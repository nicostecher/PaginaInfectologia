<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    public $table="clases" ;
    //public $primaryKey="id"; NO SE ACLARA PORQUE LARAVEL YA LA RECONOCE// 
    public $guarded=[];
}
