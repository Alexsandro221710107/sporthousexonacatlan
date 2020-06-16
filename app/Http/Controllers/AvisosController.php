<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\avisos;

class AvisosController extends Controller
{
  public function nuevoAviso(){
    $clave1 = avisos::
    orderBy('ida','desc')
    ->take(1)->get();
    $idas = $clave1 [0]->ida+1;
    return view('notices.nuevoAviso')
    ->with('idas',$idas);
  }
  public function guardarAviso(Request $request){

      $ida = $request-> ida;
      $nombre = $request-> nombre;
      $descripcion = $request-> descripcion;

      $file = $request->file('aviso');
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

      $result=\DB::select('CALL nuevoaviso(?,?,?,?)',
      [$ida,$nombre,$descripcion,$img2]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/nuevoAviso';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/nuevoAviso';
            </script>";
          }
  }
  public function reporteAvisos(){
    $avisos = avisos::all();
    return view('notices.avisos')
    ->with('avisos',$avisos);
  }
  public function editarAviso($ida){
      $avisos = avisos::where('ida',$ida)->get();
        return view ('notices.editarAviso') ->with('avisos',$avisos[0]);
  }
  public function actualizarAviso(Request $request){

    $ida = $request-> ida;
    $nombre = $request-> nombre;
    $descripcion = $request-> descripcion;

      $file = $request->file('aviso');
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
      $result=\DB::select('select actualizarAviso(?,?,?,?)',
      [$ida,$nombre,$descripcion,$img2]);

      if($result == TRUE){

          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteAvisos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteAvisos';
          </script>";
        }
    }
    public function eliminarAviso($ida){
      $res = avisos::find($ida)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteAvisos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteAvisos';
          </script>";
        }
    }
}
