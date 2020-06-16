<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasillerosTable extends Migration
{
  public function up()
  {
      Schema::create('casilleros', function (Blueprint $table) {
        $table->increments('idcasillero');
        $table->integer('idsocio')->unsigned();
        $table->foreign('idsocio')->references('idsocio')->on('socios');
        $table->rememberToken();
        $table->timestamps();
      });
  }

  public function down()
  {
      Schema::dropIfExists('casilleros');
  }
}
