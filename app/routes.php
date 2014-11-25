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
    $menu = Menu::find(1);
    $subMenu = Menu::find(2);
    $menu->menuItems;
    $subMenu->menuItems;
    $content = null;
    if(Input::get('id')){
      try {
        $content = MenuItem::find(Input::get('id'))->content;
      } catch (Exception $e) {
        
      }
    }
    return View::make('pages.3')->with('menu', $menu)
                                ->with('subMenu', $subMenu)
                                ->with('content', $content);
  });
  // User authentication routes (GET, POST, DELETE)
  Route::get('4', function(){
    return View::make('pages.4');
  });
  Route::post('4', function(){
    // Login
    $username = Input::get('username');
    $password = Input::get('password');
    if($username == 'test' && $password == 'test'){
      Session::put('loggedIn', true);
      return View::make('pages.4');
    } else {
      Session::flash('error', 'Incorrect credentials.  Please try again!');
      return View::make('pages.4');
    }
  });
  Route::delete('4', function(){
    // Logout
    Session::flush();
    return View::make('pages.4');
  });
  Route::get('5', function(){
    $view = View::make('pages.5');
    if(Cookie::has('exercise5')){
      $cookie = Cookie::forget('exercise5');
      return Response::make($view)->withCookie($cookie);
    }
    return $view;
  });
  Route::post('5', function(){
    if(Cookie::has('exercise5')){
      Cookie::forget('exercise5');
    }
    $view = View::make('pages.5');
    $cookie = Cookie::make('exercise5', 'This will expire in one minute!', 1);
    return Response::make($view)->withCookie($cookie);
  });
  Route::get('6', function(){
    return View::make('pages.6');
  });
  Route::get('7', function(){
    return View::make('pages.7');
  });
  Route::post('7', function(){
    // Update entities
    
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