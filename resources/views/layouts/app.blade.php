<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token  VUE JS-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'AppX') }} |
        @hasSection('title')
            @yield('title')
        @endif
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('cs/select2.min.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <div id="app">
       
        <nav class="navbar navbar-expand-md shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="d-none" src="/dino24.png" alt="botcham logo">
                    <strong> {{ config('app.name', 'Laravel') }} </strong>
                </a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon bg-primary"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth()
                        <ul class="navbar-nav mr-auto fw-bold">
                            <!--Nav Bar Hooks - Do not delete!!-->
						
                            <li class="nav-item">
                                <a href="{{ url('/root/dashboard') }}" class="nav-link ">🦖 Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.gifts') }}" class="nav-link">🎁 Gifts</a>                                
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/apionechaturs') }}" class="nav-link">🔱 Chatur</a>                                
                            </li>
                           
                        </ul>
                    @endauth()
                    <!-- Right Side Of Navbar -->
                    <x-com-login-nav />

                    <div id="btncomlenguaje" class="position-absolute top-0 end-0 d-none">
                        <!--     <x-ComLengue></x-ComLengue>-->
                    </div>

                </div>

            </div>

        </nav>

        {{-- <x-comnav1></x-comnav1> --}}
        {{-- two nav bar --}}
        <main class="py-1">
            <livewire:sider-bar-app /> {{-- siderbar  app menu --}}
            <livewire:sidebar-wire /> {{-- sidebar rigth flo --}}
            {{-- @yield('content') --}}
        </main>

    </div>

    <x-com-footer-app></x-com-footer-app>

    @livewireScripts

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}" defer></script>

    <link type="text/css" rel="stylesheet" href="{{ asset('cs/jquery-ui.css') }}">
    <script src="{{ asset('js/util.js') }} "></script>

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
