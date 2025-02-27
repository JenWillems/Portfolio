<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/flip.css') }}">
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>
        <li><a href="{{ route('about') }}" class="nav-link">About Me</a></li>
        <li><a href="{{ route('projects') }}" class="nav-link">Projects</a></li>
        <li><a href="{{ route('leerdoelen') }}" class="nav-link">Leerdoelen</a></li>
    </ul>
</nav>

<div id="content">
    @yield('content')
</div>

<script src="{{ asset('js/flip.js') }}"></script>
</body>
</html>
