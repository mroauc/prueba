<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idencuesta')->unsigned();
            $table->foreign('idencuesta')->references('id_encuesta')->on('encuestas');
            $table->string('rutEstudiante');
            $table->foreign('rutEstudiante')->references('rut')->on('users');
            $table->string('respuesta1');
            $table->string('respuesta2');
            $table->string('respuesta3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
