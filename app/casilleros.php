<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casilleros extends Model
{
  protected $primaryKey = 'idcasillero';
  protected $fillable = ['idcasillero','idsocio'];
}
