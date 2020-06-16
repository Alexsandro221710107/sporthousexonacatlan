<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
  public function up()
  {
      Schema::create('socios', function (Blueprint $table) {
          $table->increments('idsocio');
          $table->string('nombresoc',100);
          $table->string('apellidopsoc',100);
          $table->string('apellidomsoc',100);
          $table->string('sexosoc',1);
          $table->date('fechanacsoc');
          $table->string('callesoc',100);
          $table->string('numsoc',10);
          $table->integer('idestado')->unsigned();
          $table->foreign('idestado')->references('idestado')->on('estados');
          $table->integer('idmunicipio')->unsigned();
          $table->foreign('idmunicipio')->references('idmunicipio')->on('municipios');
          $table->string('telefonosoc',15);
          $table->string('correosoc',255);
          $table->integer('idtipomembresia')->unsigned();
          $table->foreign('idtipomembresia')->references('idtipomembresia')->on('tiposmembresias');
          $table->string('fotosoc',255);
          $table->timestamps();
      });
  }
  public function down()
  {
      Schema::dropIfExists('socios');
  }
}
