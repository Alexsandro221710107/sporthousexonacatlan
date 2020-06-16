<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
  protected $primaryKey = 'idpago';
  protected $fillable = ['idpago','idtipomembresia','idsocio','importe'];
}
