<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <div id="app">

        <nav class="navbar navbar-expand-md  shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    🦖 {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon bg-primary"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @auth()
                        <ul class="navbar-nav mr-auto">
                            <!--Nav Bar Hooks - Do not delete!!-->
						<li class="nav-item">
                            <a href="{{ url('/apichaturs') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Apichaturs</a> 
                        </li>
						
                            <li class="nav-item">

                                <a href="{{ url('/admin/pages') }}" class="nav-link">🟣 {{ __('messages.pages') }}</a>

                            </li>
                        </ul>
                    @endauth()
                    <!-- Right Side Of Navbar -->                
                    <x-com-login-nav /> 
                                     
                    <div id="btncomlenguaje" class="position-absolute top-0 end-0">                        
                        <x-ComLengue></x-ComLengue>
                      
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
 
    <script type="module">
        //if (window.location.href.indexOf('/admin/') !== -1) {
           const addModal = new bootstrap.Modal('#createDataModal');
           const editModal = new bootstrap.Modal('#updateDataModal');
            window.addEventListener('closeModal', () => {
               addModal.hide();
               editModal.hide();
            })
       // }
    </script>
    <script>
        function turnOnDarkMode() {
            document.querySelector('body').classList.add('dark');
            document.querySelectorAll('.bg-white').forEach(el => {
                //el.classList.remove('bg-white');
                el.classList.add('bg-dark');
            });
        }

        function turnOffDarkMode() {
            document.querySelector('body').classList.remove('dark');
            document.querySelectorAll('.bg-dark').forEach(el => {
                el.classList.remove('bg-dark');
                //el.classList.add('bg-white');
            });
        }
    </script>
    <script src="/js/alpinejs.js" defer></script>
</body>

</html>
