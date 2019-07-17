<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- csrf -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
      <!-- <ul>
        <li><a href="/">Welcome</a></li>
        <li><a href="/contect">Contect</a></li>
        <li><a href="/hello">Hello</a></li>
      </ul> -->
      @yield('content')
    </body>
</html>
