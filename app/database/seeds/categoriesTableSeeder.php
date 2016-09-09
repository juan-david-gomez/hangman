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
		for ($i=0; $i < 10; $i++) {
		    \DB::table('categories')->insert(array(
		           'name' => "categoria ".$i,
		    ));
		}
    }
}
