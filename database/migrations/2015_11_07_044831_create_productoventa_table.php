<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('productosventa', function (Blueprint $table) {
            $table->integer('cod_venta')->unsigned();
            $table->integer('id_producto')->unsigned();
            $table->integer('cantidad_venta');
            $table->foreign('cod_venta')->references('cod_venta')->on('ventas')->onDelete('cascade');
            $table->foreign('id_producto')->references('id_producto')->on('productos');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productoventa');    }
}
