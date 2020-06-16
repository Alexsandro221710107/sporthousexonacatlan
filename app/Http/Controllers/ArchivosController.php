<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\archivos;

class ArchivosController extends Controller
{
  public function nuevoArchivo(){
    $clave1 = archivos::
    orderBy('idfile','desc')
    ->take(1)->get();
    $idfiles = $clave1 [0]->idfile+1;
    return view('notices.nuevoArchivo')
    ->with('idfiles',$idfiles);
  }
  public function guardarArchivo(Request $request){

      $idfile = $request-> idfile;
      $nombre = $request-> nombre;
      $descripcion = $request-> descripcion;

      $file = $request->file('archivo');
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

      $result=\DB::select('CALL nuevoarchivo(?,?,?,?)',
      [$idfile,$nombre,$img2,$descripcion]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/nuevoArchivo';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/nuevoArchivo';
            </script>";
          }
  }
  public function reporteArchivos(){
    $archivos = archivos::all();
    return view('notices.archivos')
    ->with('archivos',$archivos);
  }
  public function editarArchivo($idfile){
      $archivos = archivos::where('idfile',$idfile)->get();
        return view ('notices.editaArchivo') ->with('archivos',$archivos[0]);
  }
  public function actualizarArchivo(Request $request){

    $idfile = $request-> idfile;
    $nombre = $request-> nombre;
    $descripcion = $request-> descripcion;

      $file = $request->file('archivo');
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
      $result=\DB::select('select actualizarArchivo(?,?,?,?)',
      [$idfile,$nombre,$img2,$descripcion]);

      if($result == TRUE){

          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteArchivos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteArchivos';
          </script>";
        }
    }
    public function eliminarArchivo($idfile){
      $res = archivos::find($idfile)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteArchivos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteArchivos';
          </script>";
        }
    }
}
