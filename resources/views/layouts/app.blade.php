<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Laravel</title>

    <link rel="icon" href="{{ asset('lot logo.png') }}">

    <!-- Css files wih Tailwind -->
    @vite('resources/css/app.css')

</head>
<body class="antialiased text-slate-400 dark:text-text bg-white dark:bg-primary">
<x-header/>

<div>
    @yield('content')
</div>
</body>
</html>
