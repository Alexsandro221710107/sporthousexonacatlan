<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pagos;

use App\socios;

use Illuminate\Support\Facades\DB;

use App\tiposmembresias;

use Session;

class PagosController extends Controller
{
  public function reportePagos(){
    $pagos = DB::select('SELECT pagos.idpago,pagos.idtipomembresia,tiposmembresias.tipomembresia,tiposmembresias.costo,pagos.idsocio,socios.nombresoc,socios.apellidopsoc,socios.apellidomsoc,pagos.importe FROM pagos,tiposmembresias,socios WHERE pagos.idtipomembresia = tiposmembresias.idtipomembresia AND pagos.idsocio = socios.idsocio');
    return view('admin.reportePagos')
    ->with('pagos',$pagos);
  }
  public function formularioPagos(){
    $clave1 = pagos::
    orderBy('idpago','desc')
    ->take(1)->get();
    $idpagos = $clave1 [0]->idpago+1;
    $tipomembresia = tiposmembresias::all();
    $socios = socios::all();
    return view('admin.formularioPagos')
    ->with('tipomembresia',$tipomembresia)
    ->with('socios',$socios)
    ->with('idpagos',$idpagos);
  }
    public function guardaPago(Request $request){

      $this->validate($request,[
     'importe'=>'required|regex:/^[0-9]{4}$/',
     ]);

      $idpago = $request-> idpago;
      $idtipomembresia = $request-> idtipomembresia;
      $idsocio = $request-> idsocio;
      $importe = $request-> importe;

      $result=\DB::select('CALL altapago(?,?,?,?)',
      [$idpago,$idtipomembresia,$idsocio,$importe]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioPagos';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioPagos';
            </script>";
          }
    }
}
