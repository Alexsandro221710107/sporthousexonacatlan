<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposempleados extends Model
{
  protected $primaryKey = 'idtipoempleado';
  protected $fillable = ['idtipoempleado','tipoempleado'];
}
