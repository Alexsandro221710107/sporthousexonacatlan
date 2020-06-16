<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\asignaciones;

use App\empleados;

use App\areas;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Session;

class AsignacionesController extends Controller
{
  public function reporteAsignaciones(){
    $asignaciones = DB::select('SELECT asignaciones.idasignacion,asignaciones.idarea,areas.nombrearea,asignaciones.idempleado,empleados.nombreemp,empleados.apellidope,empleados.apellidome,asignaciones.fecha FROM asignaciones,areas,empleados WHERE asignaciones.idarea = areas.idarea AND asignaciones.idempleado = empleados.idempleado');
    return view('admin.reporteAsignaciones')
    ->with('asignaciones',$asignaciones);
  }
  public function formularioAsignaciones(){
    $clave1 = asignaciones::
    orderBy('idasignacion','desc')
    ->take(1)->get();
    $idasig = $clave1 [0]->idasignacion+1;
    $empleados = empleados::all();
    $areas = areas::all();
    return view('admin.formularioAsignaciones')
    ->with('empleados',$empleados)
    ->with('areas',$areas)
    ->with('idasig',$idasig);
  }
  public function guardaAsignacion(Request $request){
      $idasignacion = $request-> idasignacion;
      $idarea = $request-> idarea;
      $idempleado = $request-> idempleado;
      $fecha = $request-> fecha;

      $result=\DB::select('CALL altaasignacion(?,?,?,?)',
      [$idasignacion,$idarea,$idempleado,$fecha]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioAsignaciones';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioAsignaciones';
            </script>";
          }
  }
  public function editaAsignacion($idasignacion){
      $asignaciones = asignaciones::where('idasignacion',$idasignacion)->get();
      $idarea = $asignaciones[0]->idarea;
      $areas = areas::where('idarea',$idarea)->get();
      $area = areas::where('idarea','<>',$idarea)->get();
      $idempleado = $asignaciones[0]->idempleado;
      $empleados = empleados::where('idempleado',$idempleado)->get();
      $empleadosape = empleados::where('idempleado',$idempleado)->get();
      $empleadosame = empleados::where('idempleado',$idempleado)->get();
      $empleado = empleados::where('idempleado','<>',$idempleado)->get();
        return view ('admin.editaAsignacion') ->with('asignaciones',$asignaciones[0])
          ->with('idarea',$idarea)->with('areas',$areas[0]->nombrearea)
          ->with('area',$area)
          ->with('idempleado',$idempleado)->with('empleados',$empleados[0]->nombreemp)->with('empleadosape',$empleadosape[0]->apellidope)->with('empleadosame',$empleadosame[0]->apellidome)
          ->with('empleado',$empleado);
  }
  public function actualizaAsignacion(Request $request){
      $idasignacion = $request-> idasignacion;
      $idarea = $request-> idarea;
      $idempleado = $request-> idempleado;
      $fecha = $request-> fecha;

      $result=\DB::select('select actualizaAsignacion(?,?,?,?)',
      [$idasignacion,$idarea,$idempleado,$fecha]);

        if($result == TRUE){
            echo "<script> alert('Asignación Actualizada Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/reporteAsignaciones';
            </script>";
        }
        else{
            echo "<script> alert('Asignación Actualizada Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/reporteAsignaciones';
            </script>";
          }
  }
  public function eliminaAsignacion($idasignacion){
    $res = asignaciones::find($idasignacion)->delete();
    if($res == TRUE){
        system($res);
        echo "<script> alert('Registro Eliminado');
        window.location='http://localhost/sporthousexonacatlan/public/reporteAsignaciones';
        </script>";
    }
    else{
        echo "<script> alert('Registro Eliminado');
        window.location='http://localhost/sporthousexonacatlan/public/reporteAsignaciones';
        </script>";
      }
  }
}
