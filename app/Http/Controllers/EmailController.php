<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
  public function contact(Request $request){
      $subject = "Bienvenido";
      $for = "al221711760@gmail.com";
      Mail::send('email.email',$request->all(), function($msj) use($subject,$for){
          $msj->from("contactosporthouse@sporthousexonacatlan.com.mx","SportHouseXonacatlan");
          $msj->subject($subject);
          $msj->to($for);
      });
      return redirect()->back();
  }
}
