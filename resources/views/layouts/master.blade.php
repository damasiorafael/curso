<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
  
    <title>@yield('title', 'Voluntarios')</title>

    @section('style')
      <link href="/css/bootstrap.min.css" rel="stylesheet">
      <link href="/css/main.css" rel="stylesheet">
    @show

  </head>

  <body>

    @include('partials.navbar')

    <div class="container">
      @yield('container')
    </div><!-- /.container -->

    @section('scripts')
      <script src="/js/jquery.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
    @show
    
  </body>
</html>
