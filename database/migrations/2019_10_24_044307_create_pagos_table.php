<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
  public function up()
  {
      Schema::create('pagos', function (Blueprint $table) {
        $table->increments('idpago');
        $table->integer('idtipomembresia')->unsigned();
        $table->foreign('idtipomembresia')->references('idtipomembresia')->on('tiposmembresias');
        $table->integer('idsocio')->unsigned();
        $table->foreign('idsocio')->references('idsocio')->on('socios');
        $table->float('importe');
        $table->rememberToken();
        $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('pagos');
  }
}
