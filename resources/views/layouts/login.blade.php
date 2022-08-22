<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <link href="/assets/bootstrap/signin.css" rel="stylesheet">
    <style>
      
      a{
        text-decoration: none;
        color: black;
      }

      img{
        object-fit: cover;
      }
    </style>
    <title>{{ $title }}</title>
  </head>
  <body class="">
    {{-- @include('partials.navbar') --}}

    <div class="container">
      @yield('form')
    </div>
 


      <script src="/assets/jquery/jquery.min.js"></script>
      <script src="/assets/bootstrap/bootstrap.min.js"></script>
  </body>
</html>