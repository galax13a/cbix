<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', ' Editor Bio Chaturbate ') }} | @hasSection('title') @yield('title')@endif</title>
@stack('scripts-head')   
@vite(['resources/css/chatur-bio.css','resources/js/chatur-bio.js'])    
@livewireStyles
</head>
<body>
<div id="app" >    
    <main>
   
            @yield('content')
           
    </main>
</div>
<script type="module">
    
    let addModal0 = document.querySelector('#createDataModal');
    if (addModal0) {
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
            addModal.hide();
            editModal.hide();
        })
    }
</script>
    @stack('scripts-body')
    @livewireScripts    
</body>
</html>
