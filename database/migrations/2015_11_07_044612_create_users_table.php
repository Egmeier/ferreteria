<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rol');
            $table->string('name',30);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('id_sucursal')->unsigned();
            $table->foreign('id_sucursal')->references('id_sucursal')->on('sucursales');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');    }
}
