@extends('layouts.exercise')

@section('content')
  @parent
  <h3>User Authentication</h3>
  <p>Alright, we're moving on to some slightly more complicated stuff: user authentication.  I think the idea of this assignment is to have two different experiences for one page.  If you aren't logged in, show a login form.  If you are logged in, show some content and maybe a logout form.  Since we're talking about mutating application state and we want to conform to best practices we will use POST to mutate application state from logged in to logged out.  So here's the breakdown:
    <ol>
      <li>Create a page that sits behind a GET request</li>
      <li>When a user GETs the page, the application will figure out if the user is authenticated or not (AKA is the user session variable (cookie) set for the current client?)</li>
      <li>The page will have two templates to display: a logged in template and a logged out template</li>
      <li>POST will occur when the user wants to log in and a DELETE will occur when the user wants to log out</li>
      <li>If login fails due to incorrect credentials then a flash message will display in the login form</li>
    </ol>
    Easy enough- let's get started!
  </p>
  <h3>Result</h3>
  <div class="row">
    @if(Session::has('loggedIn'))
      <div class="col-xs-12">
        <h4>You're logged in!</h4>
        <p>Wow, it's taken quite a lot to get us here, hasn't it?</p>
        <p>Well, I suppose it's time for you to go now...</p>
        {{ Form::open(['url' => Request::url(), 'class' => 'form-horizontal', 'method'=>'delete']) }}
          <button type="submit" class="btn-lg btn btn-primary">Log out</button>
        {{ Form::close() }}
      </div>
    @else
      <div class="col-xs-8 col-xs-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">Login Form</div>
          <div class="panel-body">
            @if(Session::has('error')){
              <div class="alert alert-danger">
                {{ Session::get('error') }}
              </div>
            }
            @endif
            {{ Form::open(['url' => Request::url(), 'class' => 'form-horizontal', 'method'=>'post']) }}

              <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" placeholder="username">
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                  <button type="submit" class="btn btn-primary form-control">Sign in</button>
                </div>
              </div>
            {{ Form::close() }}
          </div>
        </div>
        You are not logged in.  Try test test (username: test password: test)
      </div>
    @endif
  </div>
  <h3>Sources</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/4.blade.php">Exercise 4 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/routes.php">Routes file (look for GET/POST/DELETE for '4')</a></li>
  </ol>
@stop
