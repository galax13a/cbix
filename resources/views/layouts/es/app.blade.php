<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Home') }} | @hasSection('title') @yield('title')@endif</title>
    @stack('scripts-head')
</head>
<body>
    <div id="app">     
        <main class="master">
            @yield('content') 
        </main>
    </div>   
    @stack('scripts-body')
</body>
</html>
