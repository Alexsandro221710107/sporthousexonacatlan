<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
  protected $primaryKey = 'idrol';
  protected $fillable = ['idrol','tipo'];
}
