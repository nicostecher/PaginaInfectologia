<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model
{
    public $table="" ;
    public $primaryKey="";
    /* TIMESTAMPS SOLO ACLARAR SI EXISTE EN LA TABLA*/
    public $timeStamps="";
    public $guarded=[];
}
