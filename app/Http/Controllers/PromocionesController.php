<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\promociones;

class PromocionesController extends Controller
{
  public function altapromociones(){
    $clave1 = promociones::
    orderBy('idprom','desc')
    ->take(1)->get();
      $idprom = $clave1 [0]->idprom+1;
     return view('notices.altapromociones')
       ->with('idprom',$idprom);
  }

  public function guardapromocion(Request $request){
      $idprom = $request-> idprom;
      $descripcionprom = $request-> descripcionprom;

      $file = $request->file('promocion');
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

      $result=\DB::select('CALL altapromocion(?,?,?)',
      [$idprom,$img2,$descripcionprom]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/altapromociones';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/altapromociones';
            </script>";
          }
  }

  public function reportePromociones(){
    $promociones = promociones::all();
    return view('notices.reportePromociones')
    ->with('promociones',$promociones);
  }

  public function editaPromocion($idprom){
      $promociones = promociones::where('idprom',$idprom)->get();
        return view ('notices.editaPromocion')
         ->with('promociones',$promociones[0]);
  }
  public function actualizaPromocion(Request $request){

    $idprom = $request-> idprom;
    $descripcionprom = $request-> descripcionprom;

    $file = $request->file('promocion');
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

    $result=\DB::select('select actualizaPromocion(?,?,?)',
    [$idprom,$img2,$descripcionprom]);

      if($result == TRUE){
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reportePromociones';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reportePromociones';
          </script>";
        }
    }

    public function eliminaPromocion($idprom){
      $res = promociones::find($idprom)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reportePromociones';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reportePromociones';
          </script>";
        }
    }

}
