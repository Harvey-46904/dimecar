<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroContabilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro_contabilidads', function (Blueprint $table) {
            $table->increments('id_libro_contable');
            $table->unsignedInteger('libro_vehiculo');
            $table->foreign("libro_vehiculo")->references('id_vehiculo')->on('vehiculos')->onDelete('cascade');
            $table->unsignedInteger('libro_tipo_contable');
            $table->foreign("libro_tipo_contable")->references('id_tipo_contable')->on('tipo__contables')->onDelete('cascade');
            $table->string('conceptos');
            $table->integer('valor');
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
        Schema::dropIfExists('libro_contabilidads');
    }
}
