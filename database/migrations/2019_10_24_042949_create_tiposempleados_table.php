<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposempleadosTable extends Migration
{
  public function up()
  {
    Schema::create('tiposempleados', function (Blueprint $table) {
        $table->increments('idtipoempleado');
        $table->string('tipoempleado',50);
        $table->rememberToken();
        $table->timestamps();
    });
  }
  public function down()
  {
      Schema::dropIfExists('tiposempleados');
  }
}
