<div>
    <!-- Sidebar -->
    <div class="sidebar-app">
        <a href="/dashboard" class="logo" style="margin-left:16px; ">
            <img id="icon-app" src="{{ asset('logo.svg') }}" width="36px" height="36px" alt="botchatur logo">
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
                <a class="text-danger" class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
            <i class='bx bxs-share-alt'></i>
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
            <a href="{{ url('app/profile') }}" class="profile">
                <img src="{{ asset('/cam.svg') }}" alt="Logo">
            </a>
        </nav>
        <!-- End of Navbar -->
        <main>
            <div class="container-fluid bg-transparent">
                @yield('content')
            </div>        
            
            <x-adminapp.navdasboard/>

        </main>
    </div>
