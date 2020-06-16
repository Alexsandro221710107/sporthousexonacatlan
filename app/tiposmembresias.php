<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposmembresias extends Model
{
  protected $primaryKey = 'idtipomembresia';
  protected $fillable = ['idtipomembresia','tipomembresia','costo'];
}
