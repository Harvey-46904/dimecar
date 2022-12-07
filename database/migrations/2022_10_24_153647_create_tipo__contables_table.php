<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo__contables', function (Blueprint $table) {
            $table->increments('id_tipo_contable');
            $table->string('dato_tipo_contable');
            $table->string('nombre_tipo_contable');
            $table->string('descripcion_tipo_contable');
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
        Schema::dropIfExists('tipo__contables');
    }
}
