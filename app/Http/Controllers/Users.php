<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
class Users extends Controller
{
    function crearUsuario(){
      $usuario = new User($nombre, $apellido, $email, $contrasena, $legajo);
      $usuarioNuevo =  User::create([
          'nombre' => $data['nombre'],
          'apellido' => $data['apellido'],
          'legajo' => $data['legajo'],
          'email' => $data['email'],
          'contrasena' => Hash::make($data['contrasena']),
      ]);

      $usuarioNuevo->save();
    }
}/*
