<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">   
    <link href="{{ asset('cs/ bootstrap.min.css') }}" rel="stylesheet" />
     
    <title>  Tema  </title>   
</head>

<body>
    <div id="app">     
        <main class="py-1">
            @yield('content') 
        </main>
    </div>
    <script src={{ asset('js/alpinejs.js') }} defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
</body>
</html>
