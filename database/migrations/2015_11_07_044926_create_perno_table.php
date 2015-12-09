<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePernoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pernos', function (Blueprint $table) {
            $table->increments('id_perno');
            $table->integer('id_oc')->unsigned();
            $table->string('codigo');
            $table->string('descripcion');
            $table->integer('cantidad');
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
        Schema::drop('perno');    }
}
