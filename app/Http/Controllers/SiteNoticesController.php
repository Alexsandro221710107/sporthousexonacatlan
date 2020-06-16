<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\archivos;

use App\avisos;

use App\eventos;

use App\promociones;

use App\banners;

use App\productos;

class SiteNoticesController extends Controller
{
  public function siteArchivos(){
    $archivos = archivos::all();
    return view('siteNotices.archivosSite')
    ->with('archivos',$archivos);
  }
  public function siteAvisos(){
    $avisos = avisos::all();
    return view('siteNotices.avisosSite')
    ->with('avisos',$avisos);
  }
  public function siteEventos(){
    $eventos = eventos::all();
    return view('siteNotices.eventosSite')
    ->with('eventos',$eventos);
  }
  public function sitePromociones(){
    $promociones = promociones::all();
    return view('siteNotices.promocionesSite')
    ->with('promociones',$promociones);
  }
  public function publicidad(){
    $banners=banners::all();
    return view('site.publicidad')
    ->with('banners',$banners);
  }
  public function productos()
  {
    $productos = productos::all();
    return view('productos.productos')
    ->with('productos',$productos);
  }
}
