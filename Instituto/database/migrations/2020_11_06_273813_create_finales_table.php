<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finales', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('SedeId')->unsigned();
            $table->integer('CarreraId')->unsigned();
            $table->integer('DivisionId')->unsigned();
            $table->integer('MateriaId')->unsigned();
            $table->integer('AnioId')->unsigned();
            $table->integer('ProfesorId')->unsigned();
            $table->integer('ProfesorVocal_id')->unsigned();
            $table->integer('ProfesorOptativo_id')->nullable()->unsigned();
            $table->integer('Llamado_id')->unsigned();
            $table->date('Fecha');
            $table->timestamps();

            // // Las relaciones
            $table->foreign('SedeId')->references('id')
                ->on('sedes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('CarreraId')->references('id')
                ->on('carreras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('DivisionId')->references('id')
                ->on('divisiones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('MateriaId')->references('id')
                ->on('materias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ProfesorId')->references('id')
                ->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ProfesorVocal_id')->references('id')
                ->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ProfesorOptativo_id')->references('id')
                ->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
            $table->foreign('Llamado_id')->references('id')
                ->on('llamados')
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
        Schema::dropIfExists('finales');
    }
}
