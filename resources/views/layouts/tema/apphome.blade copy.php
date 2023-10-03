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
             <!-- Sidebar -->            
                <div class="sidebar-app">
                    <a href="/dashboard" class="logo" style="margin-left:16px; "> 
                        <img id="icon-app" src="{{ asset('logo-dark.svg') }}" width="36px" height="36px" alt="botchatur logo">                            
                        <div class="logo-name"><span> BOT</span>CHA🆃🆄🆁</div>
                    </a>
                    <ul class="side-menu">
                        <li class="active"><a href="javascript:void(0);"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
                        <li><a href="javascript:void(0);"><i class='bx bx-store-alt'></i>Apps</a></li>
                        <li><a href="javascript:void(0);"><i class='bx bx-palette'></i>Canva</a></li>
                        <li><a href="javascript:void(0);"><i class='bx bx-ghost'></i>Guests</a></li>            
                        <li><a href="javascript:void(0);"><i class='bx bx-wifi'></i>Test</a></li>            
                        <li><a href="javascript:void(0);"><i class='bx bxs-hot'></i>Favorites</a></li>                                                
                        <li><a href="javascript:void(0);"><i class='bx bx-message-square-dots'></i>Support</a></li>
                        <li><a href="javascript:void(0);"><i class='bx bx-cog'></i>Settings</a></li>

                    </ul>
                    <ul class="side-menu">                       

                        <li><a href="javascript:void(0);"><i class='bx bx-message-square-dots'></i>Support</a></li>
                        <li>
                            <a class="text-danger" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out-circle'></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        
                    </ul>
                </div>
    <!-- End of Sidebar -->
    <!-- Main Content -->
    <div class="content ">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <strong class="ml-3"> Dashboard</strong>
            <i class='bx bxs-share-alt' ></i>
            <i class='bx bx-file'></i>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>                    
                    </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="{{url('app/profile')}}" class="profile">
                <img src="{{ asset('/cam.svg') }}" alt="Logo">
            </a>                     
        </nav>
        <!-- End of Navbar -->
        <main >
            <div class="header">
                <div class="left">
             persiana
                </div>                
            </div>
            <div class="container bg-transparent">
                @yield('content')
            </div>

            <!-- Insights -->
            <ul class="insights">
                <li>
                    <i class='bx bxs-balloon' ></i>
                    <span class="info">
                        <h3>
                            1,074
                        </h3>
                        <p>Topics</p>
                    </span>
                </li>
                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            3,944
                        </h3>
                        <p>Tags</p>
                    </span>
                </li>
                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h3>
                            0.0
                        </h3>
                        <p>Links</p>
                    </span>
                </li>
                <li><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                            $100
                        </h3>
                        <p>Credits</p>
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->
            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Recent Orders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Order Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('/very.svg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('/very.svg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('/very.svg') }}">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Remiders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Start Our Meeting</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Analyse Our Site</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Play Footbal</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>
                <!-- End of Reminders-->
            </div>
        </main>
    </div>
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
