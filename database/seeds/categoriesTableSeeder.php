<?php

use Illuminate\Database\Seeder;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('id'=>1, 'name'=>'Animales'),
            array('id'=>2, 'name'=>'Pokémon'),
            array('id'=>3, 'name'=>'Comidas y postres'),
            array('id'=>4, 'name'=>'Ciudades del mundo'),
            array('id'=>5, 'name'=>'Frutas y verduras'),
        );

	    \DB::table('categories')->insert($data);
          
    }
}

