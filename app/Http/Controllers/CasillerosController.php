<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\casilleros;

use App\socios;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

use Session;

class CasillerosController extends Controller
{
  public function reporteCasilleros(){
    $casilleros = DB::select('SELECT casilleros.idcasillero,casilleros.idsocio,socios.nombresoc,socios.apellidopsoc,socios.apellidomsoc FROM casilleros, socios WHERE casilleros.idsocio = socios.idsocio');
    return view('admin.reporteCasilleros')
    ->with('casilleros',$casilleros);
  }
  public function formularioCasilleros(){
    $clave1 = casilleros::
    orderBy('idcasillero','desc')
    ->take(1)->get();
    $idcasilleros = $clave1 [0]->idcasillero+1;
    $socios = socios :: all();
    return view('admin.formularioCasilleros')
    ->with('socios',$socios)
    ->with('idcasilleros',$idcasilleros);
  }
  public function guardaCasillero(Request $request){
      $idcasillero = $request-> idcasillero;
      $idsocio = $request-> idsocio;

      $result=\DB::select('CALL altacasillero(?,?)',
      [$idcasillero,$idsocio]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioCasilleros';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioCasilleros';
            </script>";
          }
  }
  public function eliminaCasillero($idcasillero){
      $res = casilleros::find($idcasillero)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthousexonacatlan/public/reporteCasilleros';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthousexonacatlan/public/reporteCasilleros';
          </script>";
        }
    }

}
