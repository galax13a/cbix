<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ config('app.name', 'Editor-Thema') }} |
        @hasSection('title')
            @yield('title')
        @endif
    </title>
    @stack('scripts-head')
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <div id="app">
     
        <main class="py-1">
            @yield('content') 
        </main>
    </div>

  
    @livewireScripts

    <script src="{{ asset('js/util.js') }} "></script>
    @stack('scripts-body')
    <script type="module">
        //if (window.location.href.indexOf('/admin/') !== -1) {     
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
    <script src={{ asset('js/alpinejs.js') }} defer></script>

</body>


</html>
