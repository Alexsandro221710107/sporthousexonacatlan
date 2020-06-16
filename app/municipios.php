<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
  protected $table = "municipios";
  protected $primaryKey = 'idmunicipio';
  protected $fillable = ['idmunicipio','nombremunicipio','idestado'];
}
