<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->date('date');
            $table->string('sex');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('home');
            $table->string('civil_status');
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
        Schema::dropIfExists('datos_users');
    }
}
