<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTerritorios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territorio', function (Blueprint $table) {

            $table->increments('id');

            $table->string('nombre');

            $table->string('codigo');

            $table->string('referencia');

            $table->unsignedInteger('poblacion_id');

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
        Schema::dropIfExists('territorio', function (Blueprint $table) {
            //
        });
    }
}
