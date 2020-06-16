<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\eventos;

class EventosController extends Controller
{
  public function altaeventos(){
    $clave1 = eventos::
    orderBy('idev','desc')
    ->take(1)->get();
      $idev = $clave1 [0]->idev+1;
     return view('notices.altaeventos')
       ->with('idev',$idev);
}
public function guardaevento(Request $request){
    $idev = $request-> idev;
    $nombreev = $request-> nombreev;
    $descripcionev = $request-> descripcionev;
    $fechaev = $request-> fechaev;

    $file = $request->file('evento');
      if($file!="")
      {
        $ldate = date('Ymd_His_');
        $img = $file->getClientOriginalName();
        $img2 = $ldate.$img;
        \Storage::disk('public')->put($img2, \File::get($file));
      }
      else
      {
        $img2 = "no-image.png";
      }

    $result=\DB::select('CALL altaevento(?,?,?,?,?)',
    [$idev,$nombreev,$descripcionev,$img2,$fechaev]);

      if($result == TRUE){
          system($result);
          echo "<script> alert('Registro Guardado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/altaeventos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Guardado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/altaeventos';
          </script>";
        }
}
public function reporteEventos(){
  $eventos = eventos::all();
  return view('notices.reporteEventos')
  ->with('eventos',$eventos);
}

public function editaEvento($idev){
      $eventos = eventos::where('idev',$idev)->get();
        return view ('notices.editaEvento')
         ->with('eventos',$eventos[0]);
  }
  public function actualizaEvento(Request $request){

    $idev = $request-> idev;
    $nombreev = $request-> nombreev;
    $descripcionev = $request-> descripcionev;
    $fechaev = $request-> fechaev;

    $file = $request->file('evento');
      if($file!="")
      {
        $ldate = date('Ymd_His_');
        $img = $file->getClientOriginalName();
        $img2 = $ldate.$img;
        \Storage::disk('public')->put($img2, \File::get($file));
      }
      else
      {
        $img2 = "";
      }

    $result=\DB::select('select actualizaEven(?,?,?,?,?)',
    [$idev,$nombreev,$descripcionev,$img2,$fechaev]);

      if($result == TRUE){
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteEventos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteEventos';
          </script>";
        }
    }

	 public function eliminaEvento($idev){
      $res = eventos::find($idev)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteEventos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteEventos';
          </script>";
        }
    }
}
