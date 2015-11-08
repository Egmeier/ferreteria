<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdentrabajopernoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordentrabajoperno', function (Blueprint $table) {
            $table->integer('id_perno')->unsigned();
            $table->integer('id_ot')->unsigned();
            $table->integer('cantidad_ordentrabajo');
            $table->foreign('id_perno')->references('id_perno')->on('perno')->onDelete('cascade');
            $table->foreign('id_ot')->references('id_ot')->on('ordentrabajo')->onDelete('cascade');
       }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordentrabajoperno');    
    }
}
