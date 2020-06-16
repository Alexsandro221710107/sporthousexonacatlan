<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
  public function up()
  {
      Schema::create('municipios', function (Blueprint $table) {
        $table->increments('idmunicipio');
        $table->string('nombremunicipio',100);
        $table->integer('idestado')->unsigned();
        $table->foreign('idestado')->references('idestado')->on('estados');
        $table->rememberToken();
        $table->timestamps();
      });
  }
  public function down()
  {
      Schema::dropIfExists('municipios');
  }
}
