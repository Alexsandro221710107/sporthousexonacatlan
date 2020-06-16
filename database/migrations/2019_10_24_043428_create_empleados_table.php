<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
  public function up()
  {
          Schema::create('empleados', function (Blueprint $table) {
          $table->increments('idempleado');
          $table->string('nombreemp',100);
          $table->string('apellidope',100);
          $table->string('apellidome',100);
          $table->string('sexo',1);
          $table->date('fechanac');
          $table->string('calle',100);
          $table->string('num',10);
          $table->integer('idestado')->unsigned();
          $table->foreign('idestado')->references('idestado')->on('estados');
          $table->integer('idmunicipio')->unsigned();
          $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios');
          $table->string('telefono',15);
          $table->string('correoemp',255);
          $table->integer('idtipoempleado')->unsigned();
          $table->foreign('idtipoempleado')->references('idtipoempleado')->on('tiposempleados');
          $table->integer('idarea')->unsigned();
          $table->foreign('idarea')->references('idarea')->on('areas');
          $table->string('fotoemp',255);
          $table->rememberToken();
          $table->timestamps();
      });
  }
  public function down()
  {
      Schema::dropIfExists('empleados');
  }
}
