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
            <livewire:sider-barthemelayur/>  
        </main>
    </div>

    <x-com-footer-app></x-com-footer-app>

    <div class="floating-footer" id="menu-editor-theme">
        <nav class="navbar navbar-light bg-light rounded-3">
            <div class="container-fluid">
                <div class="container text-center" id="menu-bar-theme">
                    <div class="row align-items-center">
                      <div class="col">
                        One of three columns
                      </div>
                      <div class="col">
                        One of three columns
                      </div>
                      <div class="col">
                        One of three columns
                      </div>
                    </div>
                  </div>
                <a tooltips="Save Thema" title = "SaveMe"class="navbar-brand" href="#"><i class="bi bi-save2"></i></a>
                <a class="navbar-brand" title ="See theme" href="#"><i class="bi bi-arrow-up-right-square"></i></a>
                <a class="navbar-brand" title="Create Theme" href="#"><i class="bi bi-google-play"></i></a>
            </div>
        </nav>
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
    <script src= {{ asset('js/alpinejs.js') }} defer></script>
  
</body>

</html>
