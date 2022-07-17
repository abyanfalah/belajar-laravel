<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <title>{{ $title }}</title>
  </head>
  <body>

    @include('partials.navbar')

      <div class="container">
        @yield('container')
      </div>
 


      <script src="/assets/jquery/jquery.min.js"></script>
      <script src="/assets/bootstrap/bootstrap.min.js"></script>

  </body>
</html>