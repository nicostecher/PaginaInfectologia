<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  public $table="users";
  public $guarded=[];

  public function getEmail(){
    return $this->email;
  }
  public function setPassword(){
    return $this->password;
  }
}
