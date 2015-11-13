<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class productosSeeder extends Seeder
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
        	\DB::table('productos')->insert(array(
        		 $table->string('descripcion',60);
            $table->string('tipo',30);
            $table->float('precio');
            $table->integer('inventario');

            'descripcion'=>'Producto ' . $faker->firstNameFemale.''.$faker->lastName,
            'tipo'=>$faker->randomElement(['herramienta','instrumento','cosa fea']),
            'precio'=>$faker->randomElement(['100','instrumento','cosa fea']),
        		))
        }
    }
}
