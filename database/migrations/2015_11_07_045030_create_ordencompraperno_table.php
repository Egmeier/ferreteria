<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdencomprapernoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('ordencompraperno', function (Blueprint $table) {
            $table->integer('id_perno')->unsigned();
            $table->integer('id_oc')->unsigned();
            $table->integer('cantidad_ordencompra');
            $table->foreign('id_perno')->references('id_perno')->on('perno')->onDelete('cascade');
            $table->foreign('id_oc')->references('id_oc')->on('ordencompra')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ordencompraperno');    }
}
