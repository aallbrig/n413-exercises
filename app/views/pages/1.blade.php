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
  <div id="menu"><i class="fa fa-bars fa-2x"></i></div>
  <div id="container" class="hidden">
    I'm showing!
  </div>
  <h3>Source</h3>

@stop

@section('scripts')
  {{HTML::script('js/1.js')}}
@stop