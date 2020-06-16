<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\roles;

use App\usuarios;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Session;

use File;

use Mail;

class UsuariosController extends Controller
{
  public function formularioUsuarios(){
    $clave1 = usuarios::
    orderBy('idusuario','desc')
    ->take(1)->get();
    $idusers = $clave1 [0]->idusuario+1;
    $roles = roles :: all();
    return view('admin.formularioUsuarios')
    ->with('idusers',$idusers)
    ->with('roles',$roles);
  }
  public function guardaUsuario(Request $request){

    $this->validate($request,[
   'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'apellidopu'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'apellidomu'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'email'=>'required|email',
    ]);

      $idusuario = $request-> idusuario;
      $nombre = $request-> nombre;
      $apellidopu = $request-> apellidopu;
      $apellidomu = $request-> apellidomu;
      $email = $request-> email;
      $contraseña = $request-> contraseña;
      $activo = $request-> activo;
      $idrol = $request-> idrol;

        $file = $request->file('foto');
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

          $subject = "Bienvenido a SportHouse Xonacatlán";
          $for1 = $request -> email;
          Mail::send('email.bienvenida',$request->all(), function($msj) use($subject,$for1){
            $msj->from("contactosporthouse@sporthousexonacatlan.com.mx","SportHouseXonacatlan");
            $msj->subject($subject);
            $msj->to($for1);
          });

          $subject = "Nuevo Uuario en SportHouse Xonacatlán";
          $for = "contactosporthouse@sporthousexonacatlan.com.mx";
          Mail::send('email.notificacion',$request->all(), function($msj) use($subject,$for){
            $msj->from("contactosporthouse@sporthousexonacatlan.com.mx","SportHouseXonacatlan");
            $msj->subject($subject);
            $msj->to($for);
          });

      $result=\DB::select('CALL altausuario(?,?,?,?,?,?,?,?,?)',
      [$idusuario,$nombre,$apellidopu,$apellidomu,$email,$contraseña,$activo,$idrol,$img2]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioUsuarios';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthousexonacatlan/public/formularioUsuarios';
            </script>";
          }
  }
  public function reporteUsuarios(){
    $usuarios = DB::select('SELECT usuarios.foto,usuarios.idusuario,usuarios.nombre,usuarios.apellidopu,usuarios.apellidomu,usuarios.email,usuarios.contraseña,usuarios.idrol,roles.tipo FROM usuarios, roles WHERE usuarios.idrol = roles.idrol');
    return view('admin.reporteUsuarios')
    ->with('usuarios',$usuarios);
  }
  public function editaUsuario($idusuario){
      $usuarios = usuarios::where('idusuario',$idusuario)->get();
      $idrol = $usuarios[0]->idrol;
      $rol = roles::where('idrol',$idrol)->get();
      $roles = roles::where('idrol','<>',$idrol)->get();
        return view ('admin.editaUsuario') ->with('usuarios',$usuarios[0])
          ->with('idrol',$idrol)->with('rol',$rol[0]->tipo)
          ->with('roles',$roles);
  }
  public function actualizaUsuario(Request $request){

    $this->validate($request,[
   'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'apellidopu'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'apellidomu'=>'required|regex:/^[A-Z][A-Z,a-z, ]+$/',
   'email'=>'required|email',
    ]);

    $idusuario = $request-> idusuario;
    $nombre = $request-> nombre;
    $apellidopu = $request-> apellidopu;
    $apellidomu = $request-> apellidomu;
    $email = $request-> email;
    $contraseña = $request-> contraseña;
    $activo = $request-> activo;
    $idrol = $request-> idrol;

      $file = $request->file('foto');
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
      $result=\DB::select('select actualizaUsuario(?,?,?,?,?,?,?,?,?)',
      [$idusuario,$nombre,$apellidopu,$apellidomu,$email,$contraseña,$activo,$idrol,$img2]);

      if($result == TRUE){

          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthousexonacatlan/public/reporteUsuarios';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthousexonacatlan/public/reporteUsuarios';
          </script>";
        }
    }
    public function eliminaUsuario($idusuario){
      $res = usuarios::find($idusuario)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthousexonacatlan/public/reporteUsuarios';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthousexonacatlan/public/reporteUsuarios';
          </script>";
        }
    }
}
