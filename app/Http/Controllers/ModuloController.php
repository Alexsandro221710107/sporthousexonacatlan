<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleados;
use App\horarios;
use Illuminate\Support\Facades\DB;
use Session;
class ModuloController extends Controller
{
  public function entrada(){
    $clave1 = horarios::
    orderBy('id_h','desc')
    ->take(1)->get();
    $idh = $clave1 [0]->id_h+1;
    $empleados = empleados::all();
    return view('modulo.entrada')
    ->with('empleados',$empleados)
    ->with('idh',$idh);
  }
  public function guardaEntrada(Request $request){
    $this->validate($request,[
      'nombreemp'=>'required',
      ]);
      $id_h = $request-> id_h;
      $fecha = $request-> fecha;
      $h_entrada = $request-> reloj;
      $idempleado = $request-> idempleado;

      $result=\DB::select('CALL altaentrada(?,?,?,?)',
      [$id_h,$fecha,$h_entrada,$idempleado]);

        if($result == TRUE){
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse/entrada';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse/entrada';
            </script>";
          }
  }
  public function salida(){
    $empleados = DB::select('SELECT horarios.id_h,horarios.fecha,horarios.h_entrada,horarios.idempleado,
    empleados.idempleado,empleados.nombreemp,empleados.apellidope,empleados.apellidome
    FROM horarios, empleados
    WHERE horarios.idempleado = empleados.idempleado AND horarios.h_salida IS NULL');
    return view('modulo.salida')
    ->with('empleados',$empleados);
  }
  public function buscar(Request $request){
        $idempleado = $request-> idempleado;
        $sql= "SELECT id_h FROM horarios WHERE h_salida IS NULL AND idempleado=".$idempleado;
            $resp = DB::select($sql);
            return response ()->json($resp);
  }
  public function fecha(Request $request){
        $idempleado = $request-> idempleado;
        $sql= "SELECT fecha FROM horarios WHERE h_salida IS NULL AND idempleado=".$idempleado;
            $resp = DB::select($sql);
            return response ()->json($resp);
  }
  public function hora(Request $request){
        $idempleado = $request-> idempleado;
        $sql= "SELECT h_entrada FROM horarios WHERE h_salida IS NULL AND idempleado=".$idempleado;
            $resp = DB::select($sql);
            return response ()->json($resp);
  }
  public function guardaSalida(Request $request){
      $id_h = $request-> id_h;
      $fecha = $request-> fecha;
      $h_entrada = $request-> h_entrada;
      $idempleado = $request-> idempleado;
      $h_salida = $request-> reloj;

      $result=\DB::select('select actualizasalida(?,?,?,?,?)',
      [$id_h,$fecha,$h_entrada,$idempleado,$h_salida]);

        if($result == TRUE){
            echo "<script> alert('Salida Guardada Satisfactoriamente');
            window.location='http://localhost/sporthouse/salida';
            </script>";
        }
        else{
            echo "<script> alert('Salida Guardada Satisfactoriamente');
            window.location='http://localhost/sporthouse/salida';
            </script>";
          }
  }
}
