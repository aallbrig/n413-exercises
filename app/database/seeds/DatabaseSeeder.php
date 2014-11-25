<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('MenusTableSeeder');
		$this->call('MenuItemsTableSeeder');
		$this->call('MenusMenuItemsTableSeeder');
	}

}
