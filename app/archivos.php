<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class archivos extends Model
{
  protected $primaryKey = 'idfile';
  protected $fillable = ['idfile','nombref','archivo','descripcion'];
}
