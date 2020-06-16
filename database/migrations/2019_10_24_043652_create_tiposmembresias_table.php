<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposmembresiasTable extends Migration
{
  public function up()
  {
      Schema::create('tiposmembresias', function (Blueprint $table) {
        $table->increments('idtipomembresia');
        $table->string('tipomembresia',50);
        $table->float('costo');
        $table->rememberToken();
        $table->timestamps();
      });
  }
  public function down()
  {
      Schema::dropIfExists('tiposmembresias');
  }
}
