<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- ICONS preset-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">

    </head>

    <body>
        {{ $slot }}
    </body>
</html>