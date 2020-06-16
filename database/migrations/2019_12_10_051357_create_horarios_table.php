<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{

    public function up()
    {
      Schema::create('horarios', function (Blueprint $table) {
          $table->increments('id_h');
          $table->date('fecha');
          $table->string('h_entrada',20);
          $table->integer('idempleado')->unsigned();
          $table->foreign('idempleado')->references('idempleado')->on('empleados');
          $table->string('h_salida',20);
          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
