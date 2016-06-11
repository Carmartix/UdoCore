<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_carreras', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_carrera')->references('id')->on('carreras');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id')->on('materias');
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
        Schema::drop('materia_carreras');
    }
}
