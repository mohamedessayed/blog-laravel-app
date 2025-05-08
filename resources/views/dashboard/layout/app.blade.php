<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title','Bootstrap Admin Panel')</title>
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  </head>
  <body>

    @include('dashboard.layout.nav')

    @yield('root')

    @include('layout.footer')
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  </body>
</html>