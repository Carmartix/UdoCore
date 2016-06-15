<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->integer('num_mat');
            $table->integer('cre_obl');
            $table->integer('cre_tec');
            $table->integer('cre_hum');
            $table->string('otros',100)->nullable();
            $table->timestamps();
        });
    }\\

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_carreras');
    }
}
