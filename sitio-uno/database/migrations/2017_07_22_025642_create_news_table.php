<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {

            $table->string('titulo',200);
            $table->string('cuerpo_noticia',2000);
            $table->string('imagen_noticia',500);
            $table->boolean('estado');
            $table->dateTime('fecha_creacion');
            $table->increments('id_noticia');
            $table->string('rut')->unsigned();
            $table->foreign('rut')->references('rut')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
