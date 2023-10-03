<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>App {{ config('app.name', config('app.name'). ' Dashboard ') }} | @hasSection('title') @yield('title')@endif</title>
@stack('scripts-head')   
@vite(['resources/css/adminhome.css','resources/js/adminhome.js'])    
@livewireStyles

</head>
<body>
<div id="app" >    
        <main class="master">
         <x-adminapp.navappfront />    
           
        </main>       
</div>
<style>
body{
    background-color:  var(--grey);
}a{
    text-decoration: none;
}
</style>
    @stack('scripts-body')
    @livewireScripts
    
</body>
</html>
