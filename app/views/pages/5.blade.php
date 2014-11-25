@extends('layouts.exercise')

@section('content')
  @parent
  <h3>"Session" expiration</h3>
  <p>Well this is a super easy assignment.  Since sessions are cookies AND <a href="http://stackoverflow.com/questions/26071747/how-to-set-session-timeout-in-laravel-4-2">I would have to modify my php.ini file on my primary domain server (very undesirable)</a>, I'll go ahead and utilize a PHP cookie wrapper in order to complete this assignment.  The idea is you can set a session for 1 minute, and if you refresh the page you will either see the answer to "is the session cookie set?" as either "yes" or "no" (<a href="https://isitchristmas.com/">Is it Christmas yet style</a>).  Alright, to the breakdown.
    <ol>
      <li>Create a page that sits behind a GET request</li>
      <li>Upon retrieval, the page will figure out if the user has a session cookie or not.</li>
      <li>There will be a button that a user can click on to refresh the cookie for one minute.  When the user clicks this, a POST request will be sent that will destroy all current cookies and then set a new cookie for one minute.</li>
      <li>Just for fun, I'll create a javascript timeout for exactly one minute that will refresh the page.</li>
    </ol>
    Let's take a look at the results!
  </p>
  <h3>Result</h3>
  <hr>
  <h2 class="text-center">Is the session cookie set?</h1>
  <h1 class="text-center">
  @if(Cookie::has('exercise5'))
  Yes
  @else 
  No
  @endif
  </h1>
  {{ Form::open(['url' => Request::url(), 'method'=>'post']) }}
    <button type="submit" class="btn-lg btn btn-primary col-xs-6 col-xs-offset-3 text-center">Set new session for one minute</button>
  {{ Form::close() }}
  {{ Form::open(['url' => Request::url(), 'method'=>'get']) }}
    <button type="submit" class="btn-lg btn btn-primary col-xs-6 col-xs-offset-3 text-center">Delete Cookie</button>
  {{ Form::close() }}
  <div class="clearfix"></div>
  <div id="counterDisplay" class="text-center">60 seconds until page reload!</div>
  <hr>
  <h3>Sources</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/5.blade.php">Exercise 5 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/routes.php">Routes file (look for GET/POST for '5')</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/js/5.js"></a></li>
  </ol>
@stop

@section('scripts')
  {{HTML::script('js/5.js')}}
@stop