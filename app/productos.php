<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
  protected $primaryKey = 'idproducto';
  protected $fillable = ['idproducto','nombre','descripcion','costo','foto'];
}
