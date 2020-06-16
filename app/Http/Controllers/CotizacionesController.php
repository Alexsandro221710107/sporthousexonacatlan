<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class CotizacionesController extends Controller
{
  public function enviarballet(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajeballet',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Curso de Ballet');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
               window.location='http://localhost:8080/sporthouse/public/servicios';
               </script>";
  }

  public function enviarbasquetbol(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajebasquetbol',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Curso de Basquetbol');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }

  public function enviarbox(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajebox',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Curso de Box');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }

  public function enviarfutbol(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajefutbol',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización de La Red Escuela Diablos Toluca-Xonacatlán');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }

  public function enviargym(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajegym',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Gym');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                     window.location='http://localhost:8080/sporthouse/public/servicios';
                     </script>";
  }

  public function enviarnatacion(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajenatacion',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Curso de Natación');
      });

    echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }

  public function enviarsalon(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajesalon',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización de Nuestro Salón de Eventos');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }

  public function enviartaekwondo(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajetaekwondo',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Curso de Taekwondo');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }

  public function enviaryoga(Request $request)
  {
    $datos=$this->validate(request(),['email'=>'required',]);
    $nom=$request['nombre'];
    $email=$request['email'];
    $datos['dest']=$email;
    $datos['nombre']=$nom;
      Mail::send('mensajes.mensajeyoga',['datos'=>$datos], function($m) use ($datos)
      {
        $m->to($datos['dest'])->subject('Cotización del Curso de Yoga');
      });

      echo"<script>alert('Se ha enviado la cotización correctamente');
                   window.location='http://localhost:8080/sporthouse/public/servicios';
                   </script>";
  }
}
