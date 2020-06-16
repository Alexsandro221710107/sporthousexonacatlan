<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promociones extends Model
{
  protected $primaryKey = 'idprom';
  protected $fillable = ['idprom','promocion','descripcionprom'];
}
