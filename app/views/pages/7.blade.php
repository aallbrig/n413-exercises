@extends('layouts.exercise')

@section('content')
  @parent
  <h3>Data-driven Canvas Tag!</h3>
  <p>This is what I'm talking about!  This seems like an incredibly fun assignment because we get to create a persistent canvas drawing!  This requires that the data be represented in three places: the database, the server, and finally the clinet-side code.  The canvas element is extremely interesting so I'm pumped to break this down and get started.
    <ol>
      <li></li>
    </ol>
    Easy enough- let's get started!
  </p>
  <h3>Result</h3>
  <canvas id="canvas"></canvas>
  <h3>Sources</h3>
  <ol>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/7.blade.php">Exercise 7 page template</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/views/pages/7.blade.php">Exercise 7 javascripts</a></li>
    <li><a href="https://github.com/aallbrig/n413-exercises/blob/master/app/routes.php">Routes file (look for GET for '7')</a></li>
  </ol>
@stop

@section('scripts')
{{ HTML::script('js/7.js') }}
<script>
  new CanvasExercise('#canvas', [{radius: 5, x: 0, y: 0, dx: 1, dy: 2}]);
</script>
@stop