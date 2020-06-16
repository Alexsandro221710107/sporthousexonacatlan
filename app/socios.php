<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socios extends Model
{
  protected $primaryKey ='idsocio';
  protected $fillable =['idsocio','nombresoc','apellidopsoc','apellidomsoc','sexosoc','fechanacsoc','callesoc','numsoc','idestado','idmunicipio','telefonosoc','correosoc','idtipomembresia','fotosoc'];
}
