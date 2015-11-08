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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->integer('rol');
            $table->string('nombre',30);
            $table->string('pass', 60);
            $table->string('email')->unique();
            $table->integer('id_sucursal')->unsigned();
            $table->foreign('id_sucursal')->references('id_sucursal')->on('sucursal');
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
