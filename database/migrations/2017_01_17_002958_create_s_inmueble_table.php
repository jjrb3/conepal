<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSInmuebleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_inmueble', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_estado_inmueble')->unsigned();
            $table->string('nombre',100);
            $table->string('contacto',100);
            $table->integer('valor');
            $table->string('direccion',100);
            $table->string('descripcion',8000);
            $table->boolean('estado');
            $table->foreign('id_estado_inmueble')->references('id')->on('s_estado_inmueble');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('s_inmueble');
    }
}
