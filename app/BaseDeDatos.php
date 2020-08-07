<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BaseDeDatos;

class BaseDeDatos extends Model
{
  public $table="users";
  public $guarded=[];
  //ATRIBUTOS///
    private $nombre;
    private $apellido;
    private $legajo;
    private $email;
    private $contrasena;
 //FUNCIONALIDAD(METODOS)//
 public function crearUsuario(){
   function __construct($nombre, $apellido, $legajo, $email, $contrasena){
     $this->name=$name;
     $this->apellido=$apellido;
     $this->legajo=$legajo;
     $this->email=$email;
     $this->contrasena=$contrasena;
   }
 }

 public function getEmail(){
  //Devolvemos un atributo
         return $this->email;  }

     public function setEmail($email){
 //Le damos un valor a un atributo
         $this->email = $email;
     }
}
