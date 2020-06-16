<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{
  public function index(){
    return view('site.index');
  }

  public function machote(){
    return view('site.machote');
  }

  public function sobrenosotros(){
    return view('site.nosotros');
  }

  public function contacto(){
    return view('site.contacto');
  }

  public function galeria(){
    return view('site.galeria');
  }

  public function servicios(){
    return view('site.servicios');
  }

}
