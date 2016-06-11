<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function(Blueprint $table){
            $table->increments('id');
            $table->integer('sem');
            $table->string('codigo',7);
            $table->string('name',100);
            $table->integer('uc');
            $table->integer('pre1')->nullable()->unsigned();
            $table->integer('pre2')->nullable()->unsigned();
            $table->timestamps();
            //agregar foreign key's
            $table->index('pre1');
            $table->index('pre2');
        });

        Schema::table('materias', function ($table) {

            $table->foreign('pre1')->references('id')->on('materias');
            $table->foreign('pre2')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
