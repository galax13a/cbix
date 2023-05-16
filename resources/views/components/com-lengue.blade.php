<div>
  
    <div class="navbar-brand mb-0 h1">
        <div class="dropdown ">
            <button class="btn  dropdown-toggle" id="languageDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                @if (App::getLocale() === 'es')
                    <img src="/icons/es.png" alt="Spanish" class="language-icon"> Spanish
                @elseif(App::getLocale() === 'en')
                    <img src="/icons/en.png" alt="English" class="language-icon"> English
                @endif
            </button>
            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                <li>
                    <a class="dropdown-item text-decoration-none" href="{{ url('/es') }}">
                        <img src="/icons/es.png" alt="Spanish" class="language-icon"> Spanish
                    </a>
                </li>
                <li>
                    <a class="dropdown-item text-decoration-none" href="{{ url('/en') }}">
                        <img src="/icons/en.png" alt="English" class="language-icon"> English
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>