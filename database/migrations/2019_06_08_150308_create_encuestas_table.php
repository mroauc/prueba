<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->bigIncrements('id_encuesta');
            $table->string('pregunta1');
            $table->string('pregunta2');
            $table->string('pregunta3');
            $table->string('codigoCurso');
            $table->string('rutProfesor');
            $table->foreign('rutProfesor')->references('rut')->on('users');
            $table->string('asunto');

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
        Schema::dropIfExists('encuestas');
    }
}
