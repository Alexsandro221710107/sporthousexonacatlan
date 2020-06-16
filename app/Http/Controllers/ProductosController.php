<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\productos;

class ProductosController extends Controller
{
  public function altaproductos()
  {
    $clave1 = productos::
    orderBy('idproducto','desc')
    ->take(1)->get();
    $idp = $clave1 [0]->idproducto+1;
    return view('productos.altaproductos')
    ->with('idp',$idp);
  }
  public function guardaproducto(Request $request){
      $idproducto = $request-> idproducto;
      $nombre = $request-> nombre;
      $descripcion = $request-> descripcion;
      $costo = $request-> costo;

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

      $result=\DB::select('CALL altaproducto(?,?,?,?,?)',
      [$idproducto,$nombre,$descripcion,$costo,$img2]);

        if($result == TRUE){
            system($result);
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/altaproducto';
            </script>";
        }
        else{
            echo "<script> alert('Registro Guardado Satisfactoriamente');
            window.location='http://localhost/sporthouse-local/altaproducto';
            </script>";
          }
  }
  public function reporteProductos(){
    $productos = productos::all();
    return view('productos.reporteproductos')
    ->with('productos',$productos);
  }
  public function editaProducto($idproducto)
  {
        $productos = productos::where('idproducto',$idproducto)->get();
          return view ('productos.editaProducto')
           ->with('productos',$productos[0]);
  }
  public function actualizaProducto(Request $request){

    $idproducto = $request-> idproducto;
    $nombre = $request-> nombre;
    $descripcion = $request-> descripcion;
    $costo = $request-> costo;

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

    $result=\DB::select('select actualizaProducto(?,?,?,?,?)',
    [$idproducto,$nombre,$descripcion,$costo,$img2]);

      if($result == TRUE){
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteProductos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Actualizado Satisfactoriamente');
          window.location='http://localhost/sporthouse-local/reporteProductos';
          </script>";
        }
    }

	 public function eliminaProducto($idproducto){
      $res = productos::find($idproducto)->delete();
      if($res == TRUE){
          system($res);
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteProductos';
          </script>";
      }
      else{
          echo "<script> alert('Registro Eliminado');
          window.location='http://localhost/sporthouse-local/reporteProductos';
          </script>";
        }
    }
}
