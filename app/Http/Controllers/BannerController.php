<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\banners;

class BannerController extends Controller
{
  public function altapublicidad(){
    $clave1 = banners::
    orderBy('idbanner','desc')
    ->take(1)->get();
    $idbanners = $clave1 [0]->idbanner+1;
    return view('notices.altapublicidad')
    ->with('idbanners',$idbanners);
  }
  public function guardarPublicidad(Request $request){

      $idbanner = $request-> idbanner;
      $nombre = $request-> nombre;
      $descripcion = $request-> descripcion;

      $file = $request->file('banner');
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

      $result=\DB::select('CALL nuevapublicidad(?,?,?,?)',
      [$idbanner,$nombre,$img2,$descripcion]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost:8080/sporthouse/public/altapublicidad';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost:8080/sporthouse/public/altapublicidad';
            </script>";
          }
  }
  public function reportepublicidad(){
    $publicidad = banners::all();
    return view('notices.reportepublicidad')
    ->with('publicidad',$publicidad);
  }
  public function editarpublicidad($idbanner){
      $publicidad = banners::where('idbanner',$idbanner)->get();
        return view ('notices.editarpublicidad') ->with('publicidad',$publicidad[0]);
  }
  public function actualizarpublicidad(Request $request){

    $idbanner = $request-> idbanner;
    $nombre = $request-> nombre;
    $descripcion = $request-> descripcion;

      $file = $request->file('banner');
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
      $result=\DB::select('select actualizarpublicidad(?,?,?,?)',
      [$idbanner,$nombre,$img2,$descripcion]);

      if($result == TRUE){

          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost:8080/sporthouse/public/reportepublicidad';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost:8080/sporthouse/public/reportepublicidad';
          </script>";
        }
    }
    public function eliminarpublicidad($idbanner){
      $res = banners::find($idbanner)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost:8080/sporthouse/public/reportepublicidad';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost:8080/sporthouse/public/reportepublicidad';
          </script>";
        }
    }
}
