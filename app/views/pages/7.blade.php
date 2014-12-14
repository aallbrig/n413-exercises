@extends('layouts.exercise')

@section('content')
  @parent
  <h3>Data-driven Canvas Tag!</h3>
  <p>This is what I'm talking about!  This seems like an incredibly fun assignment because we get to create a persistent canvas drawing!  This requires that the data be represented in three places: the database, the server, and finally the clinet-side code.  The canvas element is extremely interesting so I'm pumped to break this down and get started.
    <ol>
      <li>Create a CanvasEntity domain object (model, schema/migration, seeder) and populate it with data.</li>
      <li>Retrieve all CanvasEntity objects and send data through to page.</li>
      <li>Render all CanvasEntities on canvas.</li>
      <li>Just for fun, I'll sync up the data every 5 seconds so there is persistent data by POSTing to '7' route.</li>
    </ol>
    Woo-hoo!
  </p>
  <h3>Result</h3>
  <canvas id="canvas" width="500" height="300"></canvas>
  <h3>Sources</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/7.blade.php">Exercise 7 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/public/js/7.js">Exercise 7 javascripts</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/routes.php">Routes file (look for GET & POST for '7')</a></li>
  </ol>
@stop

@section('scripts')
{{ HTML::script('js/7.js') }}
<script>
$(function(){
  var canvasExercise = new CanvasExercise('#canvas', {{$canvasEntities}});
  console.log(canvasExercise);
});
</script>
@stop