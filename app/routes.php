<?php

Route::get('/', function(){
	return View::make('pages.index');
});

Route::group(['prefix'=>'exercises'], function(){
  Route::get('1', function(){
    $menu = Menu::find(1);
    $menu->menuItems;
    return View::make('pages.1')->with('menu', $menu);
  });
  Route::get('2', function(){
    $menu = Menu::find(1);
    $subMenu = Menu::find(2);
    $menu->menuItems;
    $subMenu->menuItems;
    return View::make('pages.2')->with('menu', $menu)
                                ->with('subMenu', $subMenu);
  });
  Route::get('3', function(){
    return View::make('pages.3');
  });
  Route::get('4', function(){
    return View::make('pages.4');
  });
  Route::get('5', function(){
    return View::make('pages.5');
  });
  Route::get('6', function(){
    return View::make('pages.6');
  });
  Route::get('7', function(){
    return View::make('pages.7');
  });
  Route::get('8', function(){
    return View::make('pages.8');
  });
  Route::get('9', function(){
    return View::make('pages.9');
  });
  Route::get('10', function(){
    return View::make('pages.10');
  });
  Route::get('11', function(){
    return View::make('pages.11');
  });
  Route::get('12', function(){
    return View::make('pages.12');
  });
});