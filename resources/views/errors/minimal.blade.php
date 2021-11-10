<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{url('image/icon/error.png')}}">
    </head>
    <body class="antialiased">
        <div id="app">
            @yield('error')
        </div>
    </body>
    <script src="{{url('js/app.js')}}"></script>
</html>
