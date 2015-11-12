<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdencompraproductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenescompraproducto', function (Blueprint $table) {
            $table->integer('id_producto')->unsigned();
            $table->integer('id_oc')->unsigned();
            $table->integer('cantidad_ordencompra');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
            $table->foreign('id_oc')->references('id_oc')->on('ordenescompra')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordencompraproducto');    }
}
