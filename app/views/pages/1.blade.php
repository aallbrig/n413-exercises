@extends('layouts.exercise')

@section('styles')
  {{HTML::style('css/1.css')}}
@stop

@section('content')
  @parent
  <h3>Menu Exercise</h3>
  <p>This assignment is concerned with dynamically creating a "menu" from a persistence layer.  The task is simple:
    <ol>
      <li>Create a table to store menu data (schema: title, href, description)</li>
      <li>Serve the information with the page</li>
      <li>Render the information server-side</li>
    </ol>
  </p>
  <h3>Result</h3>
  <div id="menu"><i class="fa fa-bars fa-2x"></i> {{ $menu->name }} Menu</div>
  <div id="container" class="hidden">
    <ol>
      @foreach($menu->menuItems as $menuItem)
      <li><a href="{{$menuItem->href}}">{{$menuItem->displayText}}</a></li>
      @endforeach
    </ol>
  </div>
  <h3>Source</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013557_create_menus_table.php">Menu Migration</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013714_create_menu_items_table.php">Menu Item Migration</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013750_create_menu_menu_item_table.php">Menu Menu Item Migration (pivot table definition)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenusTableSeeder.php">Menu Seeder</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenuItemsTableSeeder.php">Menu Item Seeder</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenusMenuItemsTableSeeder.php">Menu Menu Item Seeder (pivot table seeder)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/1.blade.php">Exercise 1 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/js/1.js">Exercise 1 javascript</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/css/1.css">Exercise 1 css</a></li>
  </ol>
@stop

@section('scripts')
  {{HTML::script('js/1.js')}}
@stop