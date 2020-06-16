<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\usuarios;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\DB;

use Mail;

use Session;

class LoginController extends Controller
{
  public function iniciarsesion(){
    return view('login.login');
  }
  public function cerrarsesion(){
    Session::flush();
    Session::flash('error','Sesion Cerrada');
      return redirect('/iniciarsesion');
 	}
  public function index(Request $request){
    $datos=$this->validate(request(),[
      'email'=>'required',
      'contraseña'=>'required'
      ]);
      $correo=$request['email'];
      $password=($request['contraseña']);
      $enc=DB::select("CALL busca_usuario('$correo','$password')");
      //$encontrado=$enc[0]->encontrado;
      if(count($enc)== 0 or $enc[0]->activo == '2')
        {
          echo"<script>alert('Su Usuario Se Encuentra Actualmente INACTIVO, Por Favor Solicite Ayuda');
                         window.location='http://localhost/sporthouse/public/iniciarsesion';
                         </script>";
        }
          else{
            Session::put('sesionfoto',$enc[0]->foto);
            Session::put('sesionname',$enc[0]->nombre);
            Session::put('sesionidusuario',$enc[0]->idrol);
            Session::put('sesionapu',$enc[0]->apellidopu);
            Session::put('sesionamu',$enc[0]->apellidomu);

          return view('admin.principal');
        }
  }
  public function restablecercontraseña()
  {
    return view('login.restablecer');
  }
  public function validarCorreo(Request $request)
  {
    $datos=$this->validate(request(),[
      'email'=>'required',]);
    $correo = $request['email'];
    $enc=DB::select("SELECT idusuario,email FROM usuarios");
    foreach($enc as $e)
    {
      if($correo==($e->email))
      {
        $datos['dest']=$correo;
        $cad='abcdefghijklmnopqrstuvwyz*#%@1234';
        $datos['contraseña']=substr(str_shuffle($cad),0,8);
        $pw_enc=($datos['contraseña']);

        DB::select("UPDATE usuarios SET
          contraseña='$pw_enc' WHERE idusuario=$e->idusuario");

        Mail::send('email.restablecer',['datos'=>$datos], function($m) use ($datos)
        {
          $m->to($datos['dest'])->subject('Nueva Contraseña');
        });

        echo"<script>alert('La contraseña ha sido restablecida. Por favor checa tu correo electronico');
                       window.location='http://localhost/sporthouse/public/iniciarsesion';
                       </script>";
      }
    }
  }
}
