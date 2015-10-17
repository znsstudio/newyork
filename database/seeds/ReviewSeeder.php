<?php

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker::create();
    	foreach (range(1,50) as $index) {
	        DB::table('reviews')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'location' => $faker->company,
	            'content' => $faker->text
	        ]);
        }
    }
}
