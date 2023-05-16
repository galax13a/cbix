<?php
namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageSwitcher extends Component
{
    public $locale;

    public function mount()
    {
        $this->locale = Session::get('locale', 'en');
    }

    public function switchLanguage($locale)
    {
        $this->locale = $locale;
        Session::put('locale', $locale);
        App::setLocale($locale);
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
