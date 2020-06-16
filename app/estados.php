<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
  protected $primaryKey = 'idestado';
  protected $fillable = ['idestado','nombreestado'];
}
