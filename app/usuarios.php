<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
  protected $primaryKey ='idusuario';
  protected $fillable =['idusuario','nombre','apellidopu','apellidomu','email','contraseña','activo','idrol'];
}
