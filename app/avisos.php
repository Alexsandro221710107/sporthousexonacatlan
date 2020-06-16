<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avisos extends Model
{
  protected $primaryKey = 'ida';
  protected $fillable = ['ida','nombrea','descripcion','aviso'];
}
