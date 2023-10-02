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
<div id="app">    
        <main class="master">
             <!-- Sidebar -->
            
    <div class="sidebar-app">
        <a href="/dashboard" class="logo" style="margin-left:16px; ">     
          <svg xmlns="http://www.w3.org/2000/svg" width="36px" height="36px" viewBox="0 0 497.000000 442.000000" preserveAspectRatio="xMidYMid meet"><metadata>Created by potrace 1.16, written by Peter Selinger 2001-2019</metadata><g transform="translate(0.000000,442.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"><path d="M1510 4374 c-95 -9 -223 -46 -317 -92 -88 -42 -149 -87 -234 -171 -205 -203 -314 -491 -307 -816 l2 -130 -39 -60 c-22 -33 -43 -62 -46 -65 -22 -18 -113 -173 -143 -247 -79 -186 -88 -306 -57 -683 12 -140 28 -313 36 -385 8 -71 26 -260 40 -420 14 -159 30 -337 35 -395 6 -58 15 -154 20 -215 5 -60 19 -202 30 -315 12 -113 24 -244 27 -292 l6 -88 88 0 c49 0 89 3 89 8 0 4 -11 115 -25 247 -36 351 -61 622 -90 960 -26 311 -36 418 -81 865 -40 404 -29 511 71 710 45 90 226 366 253 388 10 8 51 12 115 12 159 0 437 38 592 81 230 63 529 217 777 401 l67 49 193 -21 c106 -11 225 -29 263 -40 95 -26 188 -63 192 -77 2 -6 -20 -29 -49 -51 -48 -36 -105 -93 -165 -165 -13 -15 -28 -27 -34 -27 -26 0 -253 -97 -658 -283 l263 -120 -71 23 c-99 31 -249 38 -350 16 -219 -49 -406 -217 -483 -436 l-23 -65 -50 -6 c-127 -16 -201 -106 -201 -244 0 -100 56 -236 114 -280 38 -28 135 -27 194 2 l43 21 17 -27 c70 -109 216 -221 338 -260 80 -25 221 -51 280 -51 22 0 76 9 120 20 251 63 419 238 486 505 18 67 20 101 16 221 l-5 142 66 23 c36 12 154 59 261 104 l195 83 69 -70 c111 -112 244 -198 392 -254 112 -42 326 -51 420 -18 51 18 112 49 141 70 17 13 36 24 41 24 25 0 199 -227 287 -376 64 -107 140 -271 150 -325 13 -68 -85 -233 -198 -335 -155 -139 -387 -254 -604 -299 -94 -20 -262 -19 -338 0 -149 39 -246 105 -411 279 -122 130 -148 144 -197 106 -52 -41 -33 -102 68 -217 261 -297 539 -407 881 -348 264 46 568 197 762 380 44 41 83 75 86 75 8 0 1 -80 -13 -155 -11 -60 -58 -195 -71 -205 -3 -3 -21 -27 -40 -55 -42 -62 -131 -151 -162 -160 -13 -4 -25 -11 -28 -15 -16 -22 -130 -55 -190 -55 -89 1 -210 16 -210 26 0 12 78 11 82 -1 2 -6 19 -7 43 -3 l40 7 -50 7 c-27 4 -104 5 -170 3 -89 -3 -111 -1 -85 6 19 5 46 7 60 5 19 -4 21 -3 10 4 -9 6 -50 8 -102 4 -48 -3 -183 -1 -300 6 -447 24 -671 33 -893 37 -126 2 -237 5 -245 6 -8 1 -37 -1 -65 -5 l-50 -6 40 14 40 14 -62 -5 c-35 -2 -91 -6 -125 -9 -46 -3 -57 -2 -43 5 17 9 16 10 -8 6 -15 -2 -30 1 -34 7 -4 6 19 7 68 3 41 -4 71 -4 67 0 -4 4 -56 8 -115 9 -60 2 -125 6 -145 10 -48 9 -48 3 -7 -147 26 -94 133 -530 179 -725 l12 -53 375 0 375 0 -6 28 c-15 63 -66 442 -66 493 l0 56 49 7 c27 4 172 2 323 -4 150 -6 437 -11 638 -13 403 -2 455 3 586 63 206 93 377 296 435 518 11 42 25 95 31 117 17 65 14 250 -6 340 -52 238 -157 503 -262 665 -40 62 -134 191 -157 215 -11 11 -37 44 -60 73 l-40 53 38 87 c53 121 65 173 65 277 -1 292 -141 525 -390 647 -133 65 -309 83 -465 48 -37 -8 -46 -6 -115 34 -170 99 -308 140 -542 161 -72 7 -84 16 -143 110 -71 115 -310 279 -500 344 -133 45 -331 68 -475 55z m360 -139 c169 -54 328 -156 428 -273 28 -34 52 -67 52 -72 0 -10 -162 -92 -168 -85 -2 2 15 14 37 27 l41 25 -52 49 c-29 28 -69 61 -88 74 -19 13 -37 27 -40 31 -11 14 -233 118 -242 113 -5 -3 -14 -2 -21 4 -45 35 -294 49 -402 23 -79 -19 -165 -53 -159 -62 3 -5 -1 -6 -9 -3 -8 3 -18 1 -22 -5 -3 -6 -15 -11 -27 -11 -13 0 -18 -5 -15 -14 4 -11 1 -13 -10 -9 -12 5 -14 3 -8 -7 5 -8 4 -11 -2 -7 -6 4 -28 -10 -48 -31 l-37 -37 23 43 c49 86 192 187 324 227 111 33 116 34 245 31 93 -3 132 -9 200 -31z m1715 -741 c125 -32 250 -127 303 -228 14 -28 26 -53 25 -56 0 -3 -4 -20 -8 -39 -5 -26 -4 -32 5 -26 7 5 11 4 8 -1 -3 -5 3 -56 13 -114 12 -74 14 -108 7 -117 -7 -9 -7 -13 0 -13 17 0 -14 -92 -53 -159 -57 -97 -140 -155 -267 -187 -162 -42 -338 40 -431 199 -79 134 -74 338 11 475 l31 51 -32 -6 c-18 -3 -40 -10 -50 -15 -9 -5 -22 -6 -27 -3 -6 3 -10 0 -10 -7 0 -10 -2 -10 -9 1 -6 9 -11 10 -15 3 -4 -6 -14 -8 -23 -5 -12 5 -15 2 -10 -9 3 -10 0 -19 -9 -22 -51 -19 47 135 120 190 125 94 278 126 421 88z m-1806 -713 c83 -26 191 -92 236 -143 84 -96 133 -256 120 -387 -24 -223 -167 -383 -377 -422 -215 -40 -430 129 -459 361 -15 125 7 234 69 334 17 27 21 41 13 49 -8 8 -11 7 -11 -3 0 -13 -2 -13 -10 0 -6 10 -25 15 -52 15 -39 0 -43 2 -44 25 -2 30 66 99 129 132 117 60 269 76 386 39z m330 -2148 c151 -24 175 -30 182 -48 9 -21 77 -463 81 -530 l3 -40 -175 0 -174 0 -42 155 c-23 85 -59 227 -79 315 -21 88 -40 166 -43 174 -4 11 3 13 34 8 21 -4 117 -19 213 -34z"/></svg>
         <div class="logo-name"><span> BOT</span>CHA🆃🆄🆁</div>
        </a>
        <ul class="side-menu">
            <li class="active"><a href="javascript:void(0);"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-store-alt'></i>Apps</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-palette'></i>Canvas</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-ghost'></i>Guests</a></li>            
            <li><a href="javascript:void(0);"><i class='bx bx-wifi'></i>Test</a></li>            
            <li><a href="javascript:void(0);"><i class='bx bxs-hot'></i>Favorites</a></li>                                                
            <li><a href="javascript:void(0);"><i class='bx bx-message-square-dots'></i>Support</a></li>
            <li><a href="javascript:void(0);"><i class='bx bx-cog'></i>Settings</a></li>

        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">    

                    <i class='bx bx-log-out-circle'></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
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
        <main>
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
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h3>
                            1,074
                        </h3>
                        <p>Paid Order</p>
                    </span>
                </li>
                <li><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h3>
                            3,944
                        </h3>
                        <p>Site Visit</p>
                    </span>
                </li>
                <li><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h3>
                            14,721
                        </h3>
                        <p>Searches</p>
                    </span>
                </li>
                <li><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h3>
                            $6,742
                        </h3>
                        <p>Total Sales</p>
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
    
a{
    text-decoration: none;
}
</style>
    @stack('scripts-body')
    @livewireScripts
    
</body>
</html>
