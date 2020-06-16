<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\estados;

use App\socios;

use App\municipios;

use App\tiposempleados;

use App\empleados;

use App\tiposmembresias;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Session;

use File;
class SociosController extends Controller
{
  public function reporteSocios(){
    $socios = DB::select('SELECT socios.fotosoc,socios.idsocio,socios.nombresoc,socios.apellidopsoc,socios.apellidomsoc,
    socios.sexosoc,socios.fechanacsoc,socios.callesoc,socios.numsoc,socios.idestado,
    estados.nombreestado,socios.idmunicipio,municipios.nombremunicipio,socios.telefonosoc,
    socios.correosoc,socios.idtipomembresia,tiposmembresias.tipomembresia FROM socios, estados, municipios, tiposmembresias
    WHERE socios.idestado = estados.idestado AND socios.idmunicipio = municipios.idmunicipio AND socios.idtipomembresia = tiposmembresias.idtipomembresia');
    return view('admin.reporteSocios')
    ->with('socios',$socios);
  }
  public function formularioSocios(){
    $clave1 = socios::
    orderBy('idsocio','desc')
    ->take(1)->get();
    $idsocios = $clave1 [0]->idsocio+1;
    $estados = estados::all();
    $municipios = municipios::all();
    $tiposmembresias = tiposmembresias::all();
    return view('admin.formularioSocios')
    ->with('idsocios',$idsocios)
    ->with('estados',$estados)
    ->with('municipios',$municipios)
    ->with('tiposmembresias',$tiposmembresias);
  }
  public function guardaSocio(Request $request){

    $this->validate($request,[
   'nombresoc'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'apellidopsoc'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'apellidomsoc'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'fechanacsoc'=>'required|date',
   'callesoc'=>'required',
   'numsoc'=>'required|regex:/^[0-9]{4}$/',
   'telefonosoc'=>'required',
   'correosoc'=>'required|email',
   ]);
      $idsocio = $request-> idsocio;
      $nombresoc = $request-> nombresoc;
      $apellidopsoc = $request-> apellidopsoc;
      $apellidomsoc = $request-> apellidomsoc;
      $sexosoc = $request-> sexosoc;
      $fechanacsoc = $request-> fechanacsoc;
      $callesoc = $request-> callesoc;
      $numsoc = $request-> numsoc;
      $idestado = $request-> idestado;
      $idmunicipio = $request-> idmunicipio;
      $telefonosoc = $request-> telefonosoc;
      $correosoc = $request-> correosoc;
      $idtipomembresia = $request-> idtipomembresia;

        $file = $request->file('fotosoc');
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

      $result=\DB::select('CALL altasocio(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
      [$idsocio,$nombresoc,$apellidopsoc,$apellidomsoc,$sexosoc,$fechanacsoc,$callesoc,$numsoc,$idestado,$idmunicipio,$telefonosoc,$correosoc,$idtipomembresia,$img2]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioSocios';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioSocios';
            </script>";
          }
      }
      public function editaSocio($idsocio){
          $socios = socios::where('idsocio',$idsocio)->get();
          $idestado = $socios[0]->idestado;
          $estados = estados::where('idestado',$idestado)->get();
          $estado = estados::where('idestado','<>',$idestado)->get();
          $idmunicipio = $socios[0]->idmunicipio;
          $municipios = municipios::where('idmunicipio',$idmunicipio)->get();
          $municipio = municipios::where('idmunicipio','<>',$idmunicipio)->get();
          $idtipomembresia = $socios[0]->idtipomembresia;
          $tiposmembresias = tiposmembresias::where('idtipomembresia',$idtipomembresia)->get();
          $tiposmembresia = tiposmembresias::where('idtipomembresia','<>',$idtipomembresia)->get();
            return view ('admin.editaSocio') ->with('socios',$socios[0])
              ->with('idestado',$idestado)->with('estados',$estados[0]->nombreestado)
              ->with('estado',$estado)
              ->with('idmunicipio',$idmunicipio)->with('municipios',$municipios[0]->nombremunicipio)
              ->with('municipio',$municipio)
              ->with('idtipomembresia',$idtipomembresia)->with('tiposmembresias',$tiposmembresias[0]->tipomembresia)
              ->with('tiposmembresia',$tiposmembresia);
      }
      public function actualizaSocio(Request $request){

        $this->validate($request,[
       'nombresoc'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
       'apellidopsoc'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
       'apellidomsoc'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
       'fechanacsoc'=>'required|date',
       'callesoc'=>'required|regex:/^[A-Z][A-Z,a-z, 0-9]+$/',
       'numsoc'=>'required|regex:/^[0-9]{4}$/',
       'telefonosoc'=>'required|regex:/^[0-9]{10}$/',
       'correosoc'=>'required|email',
       ]);
        $idsocio = $request-> idsocio;
        $nombresoc = $request-> nombresoc;
        $apellidopsoc = $request-> apellidopsoc;
        $apellidomsoc = $request-> apellidomsoc;
        $sexosoc = $request-> sexosoc;
        $fechanacsoc = $request-> fechanacsoc;
        $callesoc = $request-> callesoc;
        $numsoc = $request-> numsoc;
        $idestado = $request-> idestado;
        $idmunicipio = $request-> idmunicipio;
        $telefonosoc = $request-> telefonosoc;
        $correosoc = $request-> correosoc;
        $idtipomembresia = $request-> idtipomembresia;

          $file = $request->file('fotosoc');
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

        $result=\DB::select('select actualizaSocio(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        [$idsocio,$nombresoc,$apellidopsoc,$apellidomsoc,$sexosoc,$fechanacsoc,$callesoc,$numsoc,$idestado,$idmunicipio,$telefonosoc,$correosoc,$idtipomembresia,$img2]);

          if($result == TRUE){
              echo "<script> alert('Registro Actualizado Satisfactoriamente');
              window.location='http://localhost/sporthousexonacatlan/public/reporteSocios';
              </script>";
          }
          else{
              echo "<script> alert('Registro Actualizado Satisfactoriamente');
              window.location='http://localhost/sporthousexonacatlan/public/reporteSocios';
              </script>";
            }
        }
        public function eliminaSocio($idsocio){
          $res = socios::find($idsocio)->delete();
          if($res == TRUE){
              system($res);
              echo "<script> alert('Registro Eliminado');
              window.location='http://localhost/sporthousexonacatlan/public/reporteSocios';
              </script>";
          }
          else{
              echo "<script> alert('Registro Eliminado');
              window.location='http://localhost/sporthousexonacatlan/public/reporteSocios';
              </script>";
            }
        }
}
