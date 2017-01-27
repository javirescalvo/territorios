<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombre');

            $table->string('direccion');

            $table->unsignedInteger('poblacion_id');

            $table->string('telefono1');

            $table->string('telefono2');

            $table->string('email');

            $table->timestamps();

            $table->softDeletes();

        });

        Schema::create('persona_territorio', function (Blueprint $table) {

            $table->increments('id');

            $table->unsignedInteger('poblacion_id');

            $table->unsignedInteger('persona_id');

            $table->text('comentarios');

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona', function (Blueprint $table) {
            //
        });
        Schema::dropIfExists('persona_territorio', function (Blueprint $table) {
            //
        });
    }
}