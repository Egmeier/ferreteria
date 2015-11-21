<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class calendarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<50;$i++)
        {
        	\DB::table('calendario')->insert(array(
        	$table->string('pedido',100);
            $table->integer('cantidad');
            $table->string('fecha_inicio',30);
            $table->string('fecha_entrega',30);
            

        }
    }
}