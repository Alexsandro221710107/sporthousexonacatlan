<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
  protected $primaryKey ='id_h';
  protected $fillable =['id_h','fecha','h_entrada','idempleado','h_salida'];
}
