<div>
    <a wire:click.prevent="switchLanguage('es')" href="#">Es</a> / 
    <a wire:click.prevent="switchLanguage('en')" href="#">En</a>

    paginato : 
    <a href="{{ url('/admin/pages') }}" class="nav-link">{{ __('messages.pages') }}</a>
    <p>Current language: {{ App::getLocale() }}</p>
    </div>
