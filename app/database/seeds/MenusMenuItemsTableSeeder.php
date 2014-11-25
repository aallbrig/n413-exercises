<?php

use Faker\Factory as Faker;

class MenusMenuItemsTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();

    foreach(range(1, 10) as $i)
    {
      $menu = Menu::find($i);
      foreach (range(1, 10) as $j) {
        $menu->menuItems()->attach($j + (($i-1) * 10)); 
      }
    }
  }

}