<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('productos', function (Blueprint $table) {
            $table->increments('id_producto');
            $table->string('codigo')->unique();
            $table->string('descripcion',60);
            $table->string('tipo',30);
            $table->float('precio');
            $table->integer('inventario');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto');    }
}
