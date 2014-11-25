@extends('layouts.exercise')

@section('styles')
  {{HTML::style('css/3.css')}}
@stop

@section('content')
  @parent
  <h3>Menu With Content Exercise</h3>
  <p>This assignment is concerned with dynamically displaying information based on the <a href="/exercises/1">Menu Exercise</a> and the <a href="/exercises/2">Sub Menu Exercise</a>.  Let's do the breakdown:
    <ol>
      <li>Build off of Exercise two: Sub menu</li>
      <li>Add two fields to the menu item table: content-type and content</li>
      <li>Based on what the query parameter is, display this information</li>
    </ol>
  </p>
  <h3>Result</h3>
  <div class="row">
      <div class="col-sm-6">
        <h4>Menu</h4>
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
      </div>
      <div class="col-sm-6">
        <h4>Content</h4>
        {{ $content or "No content.  Try passing in a valid id query parameter!" }}
      </div>
  </div>
  <h3>Sources</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013557_create_menus_table.php">Menu Migration</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013714_create_menu_items_table.php">Menu Item Migration (now with content!)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/migrations/2014_11_25_013750_create_menu_menu_item_table.php">Menu Menu Item Migration (pivot table definition)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenusTableSeeder.php">Menu Seeder</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenuItemsTableSeeder.php">Menu Item Seeder</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/database/seeds/MenusMenuItemsTableSeeder.php">Menu Menu Item Seeder (pivot table seeder)</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/3.blade.php">Exercise 3 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/js/3.js">Exercise 3 javascript</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/css/3.css">Exercise 3 css</a></li>
  </ol>
@stop

@section('scripts')
  {{HTML::script('js/3.js')}}
@stop