<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CanvasEntitiesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 15) as $index)
		{
			CanvasEntity::create([
        'name'=>$faker->name,
        'x'=>rand(0,5),
        'y'=>rand(0,5),
        'dx'=>rand(0,5),
        'dy'=>rand(0,5),
        'radius'=>rand(0,10)
			]);
		}
	}

}