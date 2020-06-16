<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\estados;

use App\municipios;

use App\tiposempleados;

use App\empleados;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Session;

use File;

class EmpleadosController extends Controller
{
    public function reporteEmpleados(){
      $empleados = DB::select('SELECT empleados.fotoemp,
      empleados.idempleado,empleados.nombreemp,empleados.apellidope,empleados.apellidome,
      empleados.sexo,empleados.fechanac,empleados.calle,empleados.num,empleados.idestado,
      estados.nombreestado,empleados.idmunicipio,municipios.nombremunicipio,empleados.telefono,
      empleados.correoemp,empleados.idtipoempleado,tiposempleados.tipoempleado
      FROM empleados, estados, municipios, tiposempleados
      WHERE empleados.idestado = estados.idestado AND empleados.idmunicipio = municipios.idmunicipio AND empleados.idtipoempleado = tiposempleados.idtipoempleado');
      return view('admin.reporteEmpleados')
      ->with('empleados',$empleados);
    }
    public function formularioEmpleados(){
      $clave1 = empleados::
      orderBy('idempleado','desc')
      ->take(1)->get();
      $idempleados = $clave1 [0]->idempleado+1;
      $estados = estados::all();
      $municipios = municipios::all();
      $tiposempleados = tiposempleados::all();
      return view('admin.formularioEmpleados')
      ->with('idempleados',$idempleados)
      ->with('estados',$estados)
      ->with('municipios',$municipios)
      ->with('tiposempleados',$tiposempleados);
    }
    public function guardaEmpleado(Request $request){

      $this->validate($request,[
     'nombreemp'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
     'apellidope'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
     'apellidome'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
     'fechanac'=>'required|date',
     'calle'=>'required',
     'num'=>'required|regex:/^[0-9]$/',
     'telefono'=>'required',
     'correoemp'=>'required|email',
     ]);
        $idempleado = $request-> idempleado;
        $nombreemp = $request-> nombreemp;
        $apellidope = $request-> apellidope;
        $apellidome = $request-> apellidome;
        $sexo = $request-> sexo;
        $fechanac = $request-> fechanac;
        $calle = $request-> calle;
        $num = $request-> num;
        $idestado = $request-> idestado;
        $idmunicipio = $request-> idmunicipio;
        $telefono = $request-> telefono;
        $correoemp = $request-> correoemp;
        $idtipoempleado = $request-> idtipoempleado;

          $file = $request->file('fotoemp');
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

        $result=\DB::select('CALL altaempleado(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        [$idempleado,$nombreemp,$apellidope,$apellidome,$sexo,$fechanac,$calle,$num,$idestado,$idmunicipio,$telefono,$correoemp,$idtipoempleado,$img2]);

          if($result == TRUE){
              system($result);
              echo "<script> alert('Registro Guardado Satisfactoriamente');
              window.location='http://localhost/sporthousexonacatlan/public/formularioEmpleados';
              </script>";
          }
          else{
              echo "<script> alert('Registro Guardado Satisfactoriamente');
              window.location='http://localhost/sporthousexonacatlan/public/formularioEmpleados';
              </script>";
            }
    }
    public function editaEmpleado($idempleado){
        $empleados = empleados::where('idempleado',$idempleado)->get();
        $idestado = $empleados[0]->idestado;
        $estados = estados::where('idestado',$idestado)->get();
        $estado = estados::where('idestado','<>',$idestado)->get();
        $idmunicipio = $empleados[0]->idmunicipio;
        $municipios = municipios::where('idmunicipio',$idmunicipio)->get();
        $municipio = municipios::where('idmunicipio','<>',$idmunicipio)->get();
        $idtipoempleado = $empleados[0]->idtipoempleado;
        $tiposempleados = tiposempleados::where('idtipoempleado',$idtipoempleado)->get();
        $tipoempleado = tiposempleados::where('idtipoempleado','<>',$idtipoempleado)->get();
          return view ('admin.editaEmpleado') ->with('empleados',$empleados[0])
            ->with('idestado',$idestado)->with('estados',$estados[0]->nombreestado)
            ->with('estado',$estado)
            ->with('idmunicipio',$idmunicipio)->with('municipios',$municipios[0]->nombremunicipio)
            ->with('municipio',$municipio)
            ->with('idtipoempleado',$idtipoempleado)->with('tiposempleados',$tiposempleados[0]->tipoempleado)
            ->with('tipoempleado',$tipoempleado);
    }
    public function actualizaEmpleado(Request $request){

      $this->validate($request,[
     'nombreemp'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
     'apellidope'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
     'apellidome'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
     'fechanac'=>'required|date',
     'calle'=>'required|regex:/^[A-Z][A-Z,a-z, 0-9]+$/',
     'num'=>'required|regex:/^[0-9]{4}$/',
     'telefono'=>'required|regex:/^[0-9]{10}$/',
     'correoemp'=>'required|email',
     ]);

      $idempleado = $request-> idempleado;
      $nombreemp = $request-> nombreemp;
      $apellidope = $request-> apellidope;
      $apellidome = $request-> apellidome;
      $sexo = $request-> sexo;
      $fechanac = $request-> fechanac;
      $calle = $request-> calle;
      $num = $request-> num;
      $idestado = $request-> idestado;
      $idmunicipio = $request-> idmunicipio;
      $telefono = $request-> telefono;
      $correoemp = $request-> correoemp;
      $idtipoempleado = $request-> idtipoempleado;

        $file = $request->file('fotoemp');
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

      $result=\DB::select('select actualizaEmpleado(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
      [$idempleado,$nombreemp,$apellidope,$apellidome,$sexo,$fechanac,$calle,$num,$idestado,$idmunicipio,$telefono,$correoemp,$idtipoempleado,$img2]);

        if($result == TRUE){
            echo "<script> alert('Registro Actualizado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/reporteEmpleados';
            </script>";
        }
        else{
            echo "<script> alert('Registro Actualizado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/reporteEmpleados';
            </script>";
          }
      }
      public function eliminaEmpleado($idempleado){
        $res = empleados::find($idempleado)->delete();
        if($res == TRUE){
            system($res);
            echo "<script> alert('Registro Eliminado');
            window.location='http://localhost/sporthousexonacatlan/public/reporteEmpleados';
            </script>";
        }
        else{
            echo "<script> alert('Registro Eliminado');
            window.location='http://localhost/sporthousexonacatlan/public/reporteEmpleados';
            </script>";
          }
      }

}
