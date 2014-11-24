<html>
  <head>
   <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    @yield('styles')
    <title>Andrew Allbright Exercises | {{ $title or "" }}</title>
  </head>
  <body>
    <div class="app-content container">
      @yield('content')
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </script>
    @yield('scripts')
  </body>
</html>