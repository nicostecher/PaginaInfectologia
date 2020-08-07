<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \App\Http\Controllers\Auth\LoginController;
use \App\Http\Controllers\Auth\RegisterController;
require("App\Http\Controllers\BaseDeDatos");
class User extends Authenticatable
{
//
  //public $table="users";
  //public $guarded=[];

  //public function __construct($nombre, $apellido, $email, $contrasena, $legajo){
  //   $this->nombre = $nombre;
  //   $this->apellido = $apellido;
    // $this->email = $email;
    // $this->contrasena = $contrasena;
    // $this->legajo = $legajo;
 }

//public function getEmail(){
 //Devolvemos un atributo

 //      return $this->email;  }
  //  public function setEmail($email){
//Le damos un valor a un atributo
    //    $this->email = $email;

    //}
  //public function getContrasena(){
    //return $this->contrasena;
  //}
//Le damos un valor a un atributo
//public function setEmail($contrasena){
  //    $this->contrasena = $contrasena;
  //}

  $usuario = new $this($nombre, $apellido, $email, $contrasena, $legajo);


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','apellido', 'libreta','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
