<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('cod_venta');
            $table->float('monto_total');
            $table->timestamps();
            $table->integer('id_cliente')->unsigned()->nullable();
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venta');    }
}
