<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estados;
use App\municipios;
use Illuminate\Support\Facades\DB;

class EstadosController extends Controller
{
  public function municipios($idestado){
	   return municipios::where('idestado','=',$idestado)->get();
  }
  public function municipioSoc($idestado){
	   return municipios::where('idestado','=',$idestado)->get();
  }
}
