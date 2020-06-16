<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
  public function up()
  {
    Schema::create('areas', function (Blueprint $table) {
        $table->increments('idarea');
        $table->string('nombrearea',50);
        $table->rememberToken();
        $table->timestamps();
    });
  }
  public function down()
  {
      Schema::dropIfExists('areas');
  }
}
