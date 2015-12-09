<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdencompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('ordenescompra', function (Blueprint $table) {
            $table->increments('id_oc');
            $table->date('fecha_solicitud');
            $table->date('fecha_entrega');
            $table->integer('id_cliente')->unsigned();
            
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
        Schema::drop('ordencompra');    }
}
