@extends('layouts.exercise')

@section('styles')
  {{HTML::style('css/2.css')}}
@stop

@section('content')
  @parent
  <h3>Sub Menu Exercise</h3>
  <p>This assignment is concerned with dynamically creating a "menu" with "submenus" from a persistence layer.  The task is simple:
    <ol>
      <li>Using the already generated menu and menu item, draw more menus to create a menu hierarchy</li>
      <li>Serve the information with the page</li>
      <li>Render the information server-side</li>
      <li>Link to the same page, refreshing and adding an 'active' class to the currently selected menu item</li>
    </ol>
  </p>
  <h3>Result</h3>
  <div id="menu" class="menu"><i class="fa fa-bars fa-2x"></i> Main Menu</div>
  <div id="menuContainer" class="hidden">
    <ol>
      <li>
        <a id="subMenu" class="menu">Sub Menu <i class="fa fa-plus-square"></i></a>
        <ol id="subContainer" class="menu hidden">
          @foreach($subMenu->menuItems as $menuItem)
          <li id="{{$menuItem->id}}"><a href="{{Request::url() . "?id=$menuItem->id"}}">{{$menuItem->displayText}}</a></li>
          @endforeach
        </ol>
      </li>
      @foreach($menu->menuItems as $menuItem)
      <li id="{{$menuItem->id}}"><a href="{{Request::url() . "?id=$menuItem->id"}}">{{$menuItem->displayText}}</a></li>
      @endforeach
    </ol>
  </div>
  <h3>Sources</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013557_create_menus_table.php">Menu Migration</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013714_create_menu_items_table.php">Menu Item Migration</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013750_create_menu_menu_item_table.php">Menu Menu Item Migration (pivot table definition)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenusTableSeeder.php">Menu Seeder</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenuItemsTableSeeder.php">Menu Item Seeder</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenusMenuItemsTableSeeder.php">Menu Menu Item Seeder (pivot table seeder)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/2.blade.php">Exercise 1 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/js/2.js">Exercise 2 javascript</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/css/2.css">Exercise 2 css</a></li>
  </ol>
@stop

@section('scripts')
  {{HTML::script('js/2.js')}}
@stop