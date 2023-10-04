<div>
    <!-- Sidebar -->
    <div class="sidebar-app">
        <a href="javascript:void(0)" class="logo" style="margin-left:16px; ">
            <img id="icon-app" src="{{ asset('logo.svg') }}" width="36px" height="36px" alt="botchatur logo">
            <div class="logo-name"><span class="mx-2">BOT</span>CHA🆃🆄🆁</div>
        </a>
     <div class="ads-menu"></div>
        <ul class="side-menu">
            <li class="active"><a href="javascript:void(0);"><i class='bx bxs-dashboard'></i>{{ __('app.nav_dash') }} </a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-store-alt'></i>apps</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-palette'></i>canva</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-ghost'></i>{{ __('app.nav_guest') }}</a></li>
            <li><a href="app/test-speed"><i class='bx bx-wifi'></i>test red</a></li>
            <li><a href="javascript:void(0);"><i class='bx bxs-hot'></i>{{ __('app.nav_favor') }}</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-message-square-dots'></i>{{ __('app.nav_suport') }}</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-cog'></i>{{ __('app.nav_settings') }}</a></li>
        </ul>
        <ul class="side-menu">
            <li><a href="javascript:void(0);"><i class='bx bx-shield-alt-2'></i>{{ __('app.dash_pircing') }}</a></li>
            <li>
                <a class="text-danger" class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class='bx bx-log-out-circle'></i>
                    {{ __('app.nav_logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>       
        </ul>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/locate/en">
              <span><svg width="22px" height="22px" viewBox="0 -4 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_503_3486)"> <rect width="28" height="20" rx="2" fill="white"></rect> <mask id="mask0_503_3486" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="20"> <rect width="28" height="20" rx="2" fill="white"></rect> </mask> <g mask="url(#mask0_503_3486)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M28 0H0V1.33333H28V0ZM28 2.66667H0V4H28V2.66667ZM0 5.33333H28V6.66667H0V5.33333ZM28 8H0V9.33333H28V8ZM0 10.6667H28V12H0V10.6667ZM28 13.3333H0V14.6667H28V13.3333ZM0 16H28V17.3333H0V16ZM28 18.6667H0V20H28V18.6667Z" fill="#D02F44"></path> <rect width="12" height="9.33333" fill="#46467F"></rect> <g filter="url(#filter0_d_503_3486)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.66665 1.99999C2.66665 2.36818 2.36817 2.66666 1.99998 2.66666C1.63179 2.66666 1.33331 2.36818 1.33331 1.99999C1.33331 1.63181 1.63179 1.33333 1.99998 1.33333C2.36817 1.33333 2.66665 1.63181 2.66665 1.99999ZM5.33331 1.99999C5.33331 2.36818 5.03484 2.66666 4.66665 2.66666C4.29846 2.66666 3.99998 2.36818 3.99998 1.99999C3.99998 1.63181 4.29846 1.33333 4.66665 1.33333C5.03484 1.33333 5.33331 1.63181 5.33331 1.99999ZM7.33331 2.66666C7.7015 2.66666 7.99998 2.36818 7.99998 1.99999C7.99998 1.63181 7.7015 1.33333 7.33331 1.33333C6.96512 1.33333 6.66665 1.63181 6.66665 1.99999C6.66665 2.36818 6.96512 2.66666 7.33331 2.66666ZM10.6666 1.99999C10.6666 2.36818 10.3682 2.66666 9.99998 2.66666C9.63179 2.66666 9.33331 2.36818 9.33331 1.99999C9.33331 1.63181 9.63179 1.33333 9.99998 1.33333C10.3682 1.33333 10.6666 1.63181 10.6666 1.99999ZM3.33331 3.99999C3.7015 3.99999 3.99998 3.70152 3.99998 3.33333C3.99998 2.96514 3.7015 2.66666 3.33331 2.66666C2.96512 2.66666 2.66665 2.96514 2.66665 3.33333C2.66665 3.70152 2.96512 3.99999 3.33331 3.99999ZM6.66665 3.33333C6.66665 3.70152 6.36817 3.99999 5.99998 3.99999C5.63179 3.99999 5.33331 3.70152 5.33331 3.33333C5.33331 2.96514 5.63179 2.66666 5.99998 2.66666C6.36817 2.66666 6.66665 2.96514 6.66665 3.33333ZM8.66665 3.99999C9.03484 3.99999 9.33331 3.70152 9.33331 3.33333C9.33331 2.96514 9.03484 2.66666 8.66665 2.66666C8.29846 2.66666 7.99998 2.96514 7.99998 3.33333C7.99998 3.70152 8.29846 3.99999 8.66665 3.99999ZM10.6666 4.66666C10.6666 5.03485 10.3682 5.33333 9.99998 5.33333C9.63179 5.33333 9.33331 5.03485 9.33331 4.66666C9.33331 4.29847 9.63179 3.99999 9.99998 3.99999C10.3682 3.99999 10.6666 4.29847 10.6666 4.66666ZM7.33331 5.33333C7.7015 5.33333 7.99998 5.03485 7.99998 4.66666C7.99998 4.29847 7.7015 3.99999 7.33331 3.99999C6.96512 3.99999 6.66665 4.29847 6.66665 4.66666C6.66665 5.03485 6.96512 5.33333 7.33331 5.33333ZM5.33331 4.66666C5.33331 5.03485 5.03484 5.33333 4.66665 5.33333C4.29846 5.33333 3.99998 5.03485 3.99998 4.66666C3.99998 4.29847 4.29846 3.99999 4.66665 3.99999C5.03484 3.99999 5.33331 4.29847 5.33331 4.66666ZM1.99998 5.33333C2.36817 5.33333 2.66665 5.03485 2.66665 4.66666C2.66665 4.29847 2.36817 3.99999 1.99998 3.99999C1.63179 3.99999 1.33331 4.29847 1.33331 4.66666C1.33331 5.03485 1.63179 5.33333 1.99998 5.33333ZM3.99998 5.99999C3.99998 6.36819 3.7015 6.66666 3.33331 6.66666C2.96512 6.66666 2.66665 6.36819 2.66665 5.99999C2.66665 5.6318 2.96512 5.33333 3.33331 5.33333C3.7015 5.33333 3.99998 5.6318 3.99998 5.99999ZM5.99998 6.66666C6.36817 6.66666 6.66665 6.36819 6.66665 5.99999C6.66665 5.6318 6.36817 5.33333 5.99998 5.33333C5.63179 5.33333 5.33331 5.6318 5.33331 5.99999C5.33331 6.36819 5.63179 6.66666 5.99998 6.66666ZM9.33331 5.99999C9.33331 6.36819 9.03484 6.66666 8.66665 6.66666C8.29846 6.66666 7.99998 6.36819 7.99998 5.99999C7.99998 5.6318 8.29846 5.33333 8.66665 5.33333C9.03484 5.33333 9.33331 5.6318 9.33331 5.99999ZM9.99998 8C10.3682 8 10.6666 7.70152 10.6666 7.33333C10.6666 6.96514 10.3682 6.66666 9.99998 6.66666C9.63179 6.66666 9.33331 6.96514 9.33331 7.33333C9.33331 7.70152 9.63179 8 9.99998 8ZM7.99998 7.33333C7.99998 7.70152 7.7015 8 7.33331 8C6.96512 8 6.66665 7.70152 6.66665 7.33333C6.66665 6.96514 6.96512 6.66666 7.33331 6.66666C7.7015 6.66666 7.99998 6.96514 7.99998 7.33333ZM4.66665 8C5.03484 8 5.33331 7.70152 5.33331 7.33333C5.33331 6.96514 5.03484 6.66666 4.66665 6.66666C4.29846 6.66666 3.99998 6.96514 3.99998 7.33333C3.99998 7.70152 4.29846 8 4.66665 8ZM2.66665 7.33333C2.66665 7.70152 2.36817 8 1.99998 8C1.63179 8 1.33331 7.70152 1.33331 7.33333C1.33331 6.96514 1.63179 6.66666 1.99998 6.66666C2.36817 6.66666 2.66665 6.96514 2.66665 7.33333Z" fill="url(#paint0_linear_503_3486)"></path> </g> </g> </g> <defs> <filter id="filter0_d_503_3486" x="1.33331" y="1.33333" width="9.33331" height="7.66667" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix> <feOffset dy="1"></feOffset> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"></feColorMatrix> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_503_3486"></feBlend> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_503_3486" result="shape"></feBlend> </filter> <linearGradient id="paint0_linear_503_3486" x1="1.33331" y1="1.33333" x2="1.33331" y2="7.99999" gradientUnits="userSpaceOnUse"> <stop stop-color="white"></stop> <stop offset="1" stop-color="#F0F0F0"></stop> </linearGradient> <clipPath id="clip0_503_3486"> <rect width="28" height="20" rx="2" fill="white"></rect> </clipPath> </defs> </g></svg> </span>
                EN
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/locate/es">
                    <svg width="22px" height="22px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#C60A1D" d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z"></path><path fill="#FFC400" d="M0 12h36v12H0z"></path><path fill="#EA596E" d="M9 17v3a3 3 0 1 0 6 0v-3H9z"></path><path fill="#F4A2B2" d="M12 16h3v3h-3z"></path><path fill="#DD2E44" d="M9 16h3v3H9z"></path><ellipse fill="#EA596E" cx="12" cy="14.5" rx="3" ry="1.5"></ellipse><ellipse fill="#FFAC33" cx="12" cy="13.75" rx="3" ry=".75"></ellipse><path fill="#99AAB5" d="M7 16h1v7H7zm9 0h1v7h-1z"></path><path fill="#66757F" d="M6 22h3v1H6zm9 0h3v1h-3zm-8-7h1v1H7zm9 0h1v1h-1z"></path></g></svg>
                    ES</a>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/locate/fr">
                <span>
                    <svg width="22px" height="22px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ED2939" d="M36 27a4 4 0 0 1-4 4h-8V5h8a4 4 0 0 1 4 4v18z"></path><path fill="#002495" d="M4 5a4 4 0 0 0-4 4v18a4 4 0 0 0 4 4h8V5H4z"></path><path fill="#EEE" d="M12 5h12v26H12z"></path></g></svg>    
                </span>
                FR</a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="/locate/de">
                    <svg width="22px" height="22px" viewBox="0 -4 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_503_3849)"> <rect width="28" height="20" rx="2" fill="white"></rect> <mask id="mask0_503_3849" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="20"> <rect width="28" height="20" rx="2" fill="white"></rect> </mask> <g mask="url(#mask0_503_3849)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.66667H28V0H0V6.66667Z" fill="#262626"></path> <g filter="url(#filter0_d_503_3849)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 13.3333H28V6.66666H0V13.3333Z" fill="#F01515"></path> </g> <g filter="url(#filter1_d_503_3849)"> <path fill-rule="evenodd" clip-rule="evenodd" d="M0 20H28V13.3333H0V20Z" fill="#FFD521"></path> </g> </g> </g> <defs> <filter id="filter0_d_503_3849" x="0" y="6.66666" width="28" height="6.66666" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix> <feOffset></feOffset> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"></feColorMatrix> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_503_3849"></feBlend> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_503_3849" result="shape"></feBlend> </filter> <filter id="filter1_d_503_3849" x="0" y="13.3333" width="28" height="6.66666" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"> <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood> <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix> <feOffset></feOffset> <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"></feColorMatrix> <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_503_3849"></feBlend> <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_503_3849" result="shape"></feBlend> </filter> <clipPath id="clip0_503_3849"> <rect width="28" height="20" rx="2" fill="white"></rect> </clipPath> </defs> </g></svg>
                DE</a>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/locate/br">
                    <svg width="22px" height="22px" viewBox="0 -4 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_503_4726)"> <rect width="28" height="20" rx="2" fill="white"></rect> <mask id="mask0_503_4726" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="20"> <rect width="28" height="20" rx="2" fill="white"></rect> </mask> <g mask="url(#mask0_503_4726)"> <rect width="28" height="20" fill="#05AB41"></rect> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.53152 10.5597C3.12552 10.297 3.12552 9.70301 3.53152 9.44031L13.6377 2.90103C13.8581 2.75843 14.1416 2.75843 14.362 2.90103L24.4682 9.44031C24.8742 9.70301 24.8742 10.297 24.4682 10.5597L14.362 17.099C14.1416 17.2416 13.8581 17.2416 13.6377 17.099L3.53152 10.5597Z" fill="#FDD216"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0002 14.6666C16.5775 14.6666 18.6668 12.5773 18.6668 9.99998C18.6668 7.42265 16.5775 5.33331 14.0002 5.33331C11.4228 5.33331 9.3335 7.42265 9.3335 9.99998C9.3335 12.5773 11.4228 14.6666 14.0002 14.6666Z" fill="#053087"></path> <mask id="mask1_503_4726" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="9" y="5" width="10" height="10"> <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0002 14.6666C16.5775 14.6666 18.6668 12.5773 18.6668 9.99998C18.6668 7.42265 16.5775 5.33331 14.0002 5.33331C11.4228 5.33331 9.3335 7.42265 9.3335 9.99998C9.3335 12.5773 11.4228 14.6666 14.0002 14.6666Z" fill="white"></path> </mask> <g mask="url(#mask1_503_4726)"> <path d="M8.77987 8.78021C9.51257 8.18688 11.8769 8.74895 14.084 9.33769C16.291 9.92643 18.5929 11.1604 19.179 11.8842" stroke="white" stroke-width="1.33333" stroke-linecap="square"></path> </g> </g> </g> <defs> <clipPath id="clip0_503_4726"> <rect width="28" height="20" rx="2" fill="white"></rect> </clipPath> </defs> </g></svg>
                BR</a>
                </a>
            </li>
        </ul>        
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content" >
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <strong class="ml-3"> @hasSection('title_app') @yield('title_app')@endif </strong>
            |<span class="text-capitalize mx-3">👻 {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <div class="modetema" id="modetema">
                <strong>Dark</strong>
            </div>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="{{ url('app/profile') }}" class="profile">
                <img title="Virtual Cams" class="mx-4" width="26px" height="26px" src="{{ asset('/icons/cam.svg') }}" alt="Logo">
            </a>
        </nav>
        <!-- End of Navbar -->
        <main>
            <div class="container-fluid bg-transparent "  >
                @yield('content')
            </div>           
        <!--component content -->           

        </main>
    </div>
