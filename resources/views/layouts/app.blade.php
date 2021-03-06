<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Huân Speed</title>

    <!-- Scripts -->
    <script href="js/app.js'" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="js/main.js"></script>
</body>
</html>
