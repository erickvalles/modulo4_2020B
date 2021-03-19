<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateCiudadHasTiendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudad_has_tienda', function (Blueprint $table) {
            $table->foreignId('ciudad_id');
            $table->foreignId('tienda_id');

            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->foreign('tienda_id')->references('id')->on('tiendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ciudad_has_tienda', function (Blueprint $table) {
            //
        });
    }
}
