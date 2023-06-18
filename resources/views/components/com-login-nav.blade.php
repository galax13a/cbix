<div>
    <!-- Com Login Nav -->
    <ul class="navbar-nav ms-auto fw-bold">
        <!-- Authentication Links -->

        @guest
            <li class="nav-item">
                <a class="nav-link custom-link" href="{{ route('login') }}">💛{{ __('home.home') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-link" href="{{ route('login') }}">👻{{ __('home.apps') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-link" href="{{ route('login') }}">🔱Api</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-link" href="{{ route('login') }}">🏆{{ __('home.bios') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-link" href="{{ route('login') }}">🧿Bots</a>
            </li>
            <li class="nav-item">
                <a class="nav-link custom-link" href="{{ route('login') }}">🟢{{ __('home.download') }}</a>
            </li>

            @if (Route::has('login'))
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('home.login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('home.register') }}</a>
                </li>
            @endif

            <li class="nav-item mt-1">
                <div class="btn-group btn-group-sm ">
                  
                    <a href="{{ url('/en') }}" title="English" class="custom-link  btn rounded-4  {{ session('locale') == 'en' ? 'btn-dark' : '' }} ">En</a>
                    <a href="{{ url('/es') }}" title="Spanish" class=" custom-link btn  rounded-4  {{ session('locale') == 'es' ? 'btn-dark' : '' }}">Es</a>
                    <a href="javascript:void(0)" style="background: transparent;">
                        @if (App::getLocale() === 'es')
                            <img src="/icons/es.png" alt="Spanish" class="language-icon">
                        @elseif(App::getLocale() === 'en')
                            <img class="p-1" width="55%;" src="/icons/en.png" alt="English"
                                class="language-icon">
                    </a>
                    @endif
                </div>
            </li>

         
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle px-3" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    👻 <span class="text-capitalize">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</span>

                    
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                      
                    <a class="dropdown-item" href="/admin/profile">
                  profile
                </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <div class="btn-group btn-group-sm">
                        <a href="{{ url('/en') }}" title="English" class="custom-link  btn border-3" aria-current="page">En</a>
                        <a href="{{ url('/es') }}" title="Spanish" class=" custom-link border-3 btn ">Es</a>
                        <a href="javascript:void(0)"  style="background: transparent;">
                            @if (App::getLocale() === 'es')
                                <img src="/icons/es.png" alt="Spanish" class="language-icon">
                            @elseif(App::getLocale() === 'en')
                                <img class="shadow-sm p-1" width="55%;" src="/icons/en.png" alt="English"
                                    class="language-icon">
                        </a>
                        @endif
                    </div>

                </div>
            </li>

        @endguest

    </ul>
</div>
