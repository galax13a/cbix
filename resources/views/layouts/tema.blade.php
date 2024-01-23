<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">   
    <link href="{{ asset('storage/temas/cdn/bootstrap5.2/css/bootstrap.min.css') }}" rel="stylesheet" />   
     
    <title>  Thema admin  </title>   
</head>

<body>
    <div id="app">     
        <main class="py-1">
            @yield('content') 
        </main>
    </div>
    <script src={{ asset('js/alpinejs.js') }} defer></script>
    <script src="{{ asset('storage/temas/cdn/bootstrap5.2/js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
