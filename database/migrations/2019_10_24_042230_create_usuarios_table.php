<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
  public function up()
  {
      Schema::create('usuarios', function (Blueprint $table) {
          $table->increments('idusuario');
          $table->string('nombre',100);
          $table->string('apellidopu',100);
          $table->string('apellidomu',100);
          $table->string('email',255);
          $table->string('contraseña',100);
          $table->string('activo',1);
          $table->integer('idrol')->unsigned();
          $table->foreign('idrol')->references('idrol')->on('roles');
          $table->rememberToken();
          $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('usuarios');
  }
}
