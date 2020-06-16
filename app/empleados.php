<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
  protected $primaryKey ='idempleado';
  protected $fillable =['idempleado','nombreemp','apellidope','apellidome','sexo','fechanac','calle','num','idestado','idmunicipio','telefono','correoemp','idtipoempleado','idarea','fotoemp'];
}
