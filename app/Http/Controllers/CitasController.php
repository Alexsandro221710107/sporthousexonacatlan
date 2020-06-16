<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\areas;

use Mail;
 
class CitasController extends Controller
{
  public function agendarcita()
  {
    $areas = areas :: all();
    return view('site.agendarcita')
    ->with('areas',$areas);
  }

  public function enviarcita(Request $request)
  {
    $this->validate($request,[
      'telefonocita'=>'required|regex:/^[0-9]{10}$/',
    ]);

    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $nombrearea=$request['nombrearea'];
    $fecha=$request['fecha'];
    $mensaje=$request['mensaje'];
    $telefono=$request['telefonocita'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
    $datos['nombrearea']=$nombrearea;
    $datos['fecha']=$fecha;
    $datos['mensaje']=$mensaje;
    $datos['telefonocita']=$telefono;
      $subject = "Nueva Cita en SportHouse Xonacatlán";
      $for = "contactosporthouse@sporthousexonacatlan.com.mx";
        Mail::send('mensajes.mensajecita',['datos'=>$datos], function($msj) use($subject,$for){
          $msj->from("contactosporthouse@sporthousexonacatlan.com.mx","SportHouseXonacatlan");
          $msj->subject($subject);
          $msj->to($for);
        });
  /*Mail::send('mensajes.mensajecita',['datos'=>$datos], function($m) use ($datos)
  {
    $m->to($datos['dest'])->subject('Nueva Cita');
  });*/

  echo"<script>alert('Se ha enviado la cita correctamente');
                 window.location='http://localhost:8080/sporthouse/public/agendarcita';
                 </script>";
}
}
