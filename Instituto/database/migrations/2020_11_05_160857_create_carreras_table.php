<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CarreraDn', 150);
            $table->string('CarreraAnios', 1);
            $table->string('CarreraResolucion', 50);
            $table->integer('SedeId')->unsigned();
            $table->integer('SedeOptional1Id')->nullable()->unsigned();
            $table->integer('SedeOptional2Id')->nullable()->unsigned();
            $table->timestamps();

            // Las relaciones con la tabla de sedes
            $table->foreign('SedeId')->references('id')
                    ->on('sedes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('SedeOptional1Id')->references('id')
                    ->on('sedes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('SedeOptional2Id')->references('id')
                    ->on('sedes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carreras');
    }
}
