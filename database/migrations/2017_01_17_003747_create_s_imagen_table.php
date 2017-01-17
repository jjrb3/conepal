<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_imagen', function (Blueprint $table) {
            $table->integer('id_inmueble')->unsigned();
            $table->string('ruta',100);
            $table->foreign('id_inmueble')->references('id')->on('s_inmueble');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('s_imagen');
    }
}
