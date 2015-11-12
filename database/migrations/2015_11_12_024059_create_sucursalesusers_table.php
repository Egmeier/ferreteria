<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursalesuser', function (Blueprint $table){
        $table->integer('id')->unsigned();
        $table->integer('id_sucursal')->unsigned();
        $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('id_sucursal')->references('id_sucursal')->on('sucursales')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
