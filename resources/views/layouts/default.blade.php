<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}?<?php echo date("YmdHis"); ?>" rel="stylesheet">
</head>
<body>
    <ul>
        <li><a href="/">TOP</a></li>
        <li><a href="/vue">VUE</a></li>
        <li><a href="/home">ログイン1</a></li>
        <li><a href="/admin/home">ログイン2</a></li>
    </ul>
    <div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
