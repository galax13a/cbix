<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <title>{{ config('app.name', 'Home') }} | @hasSection('title') @yield('title')  @endif
    </title>
    @stack('scripts-head')   
    @vite(['resources/css/home.css'])
    
</head>

<body>
    <div id="app">
        <main class="master">
            @yield('content')
        </main>
        
        <x-themacoms.footerhome />
        
    </div>
    @stack('scripts-body')
</body>
<style>
body {
    background-image: linear-gradient(to bottom, #ffffff, #c5acacbb);
}
</style>
</html>
