<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class wordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();
       	for ($i=0; $i < 50; $i++) {
		    \DB::table('words')->insert(array(
		           'category_id' => $faker->numberBetween(1,10),
		           'name' => $faker->name,
		    ));
		}    }
}
