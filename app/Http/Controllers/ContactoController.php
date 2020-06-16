<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class ContactoController extends Controller
{
  public function contacto(Request $request){

      $subject = $request-> subject;
      $for = "contactosporthouse@sporthousexonacatlan.com.mx";
      $for1 = $request-> email;
      Mail::send('email.contacto',$request->all(), function($msj) use($subject,$for,$for1){
          $msj->from("contactosporthouse@sporthousexonacatlan.com.mx","SportHouseContactanos");
          $msj->subject($subject);
          $msj->to($for);
          $msj->to($for1);
      });
      
      echo "<script> alert('Mensaje Enviado');
      window.location='http://localhost/sporthouse/contacto';
      </script>";
  }
}
