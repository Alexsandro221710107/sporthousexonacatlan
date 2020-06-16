<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignaciones extends Model
{
  protected $primaryKey = 'idasignacion';
  protected $fillable = ['idasignacion','idarea','idempleado','fecha'];
}
