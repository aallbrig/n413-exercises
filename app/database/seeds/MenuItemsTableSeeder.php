<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class MenuItemsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			MenuItem::create([
        'displayText' => $faker->name,
        'href' => "/",
        // Added for exercise 3
				'contentType'=>'text',
				'content'=>$faker->paragraph(rand(1, 10))
				// end added for exercise 3
			]);
		}
	}

}