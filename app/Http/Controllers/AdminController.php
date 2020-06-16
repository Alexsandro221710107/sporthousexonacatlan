<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class AdminController extends Controller
{
  public function inicio(){
    return view('admin.principal');
  }
}
