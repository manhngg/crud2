<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')Crud</title>
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
        <!-- <script src="{{ asset('js/app.js') }}" type="text/js"></script> -->
  </body>
</html>