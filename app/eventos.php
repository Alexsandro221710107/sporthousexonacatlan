<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
  protected $primaryKey = 'idev';
  protected $fillable = ['idev','nombreev','descripcionev','evento','fechaev'];
}
