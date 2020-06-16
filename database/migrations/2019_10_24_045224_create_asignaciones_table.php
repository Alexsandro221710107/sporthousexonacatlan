<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignacionesTable extends Migration
{
  public function up()
  {
      Schema::create('asignaciones', function (Blueprint $table) {
        $table->increments('idasignacion');
        $table->integer('idarea')->unsigned();
        $table->foreign('idarea')->references('idarea')->on('areas');
        $table->integer('idempleado')->unsigned();
        $table->foreign('idempleado')->references('idempleado')->on('empleados');
        $table->date('fecha');
        $table->rememberToken();
        $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('asignaciones');
  }
}
