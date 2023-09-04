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

<body style="background-color: #fff;">

    <div id="app">
        <main class="py-1">
            <livewire:sider-barthemelayur />
        </main>
    </div>

    <x-com-footer-app></x-com-footer-app>

    <div class="floating-footer shadow" id="menu-editor-theme">
        <nav class="navbar navbar-light bg-light rounded-3">
            <div class="container-fluid">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-2"><i class="bi bi-terminal-plus"></i> <strong>ToolBox v1.0</strong></div>
                        <div class="col-10  align-center">
                            <div class="container text-center">
                                <div class="row align-items-center p-1 rounded-3 shadow" id="control-theme">
                                    <div class="col">
                                        Render Tools, Select Components 
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col align-items-center">
                                    <strong>BotChatur.com</strong><br>
                                    <a tooltips="Save Thema" title="SaveMe" class="navbar-brand" href="#"><i
                                            class="bi bi-save2"></i> Save</a>
                                    <a class="navbar-brand" title="See theme" href="#"><i
                                            class="bi bi-arrow-up-right-square"></i> Online Thema</a>
                                    <a class="navbar-brand" title="Create Theme" href="#"><i
                                            class="bi bi-google-play"> Generate Theme</i></a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
        </nav>
    </div>


    <style>
        .floating-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>

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
