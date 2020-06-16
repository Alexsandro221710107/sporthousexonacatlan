<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
  protected $primaryKey = 'idbanner';
  protected $fillable = ['idbanner','nombre','banner','descripcion'];
}
