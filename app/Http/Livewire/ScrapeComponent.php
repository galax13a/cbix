<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Weidner\Goutte\GoutteFacade as Goutte;

class ScrapeComponent extends Component
{
    public $url;
    public $data = "";
    public $statusMessage;

    public function scrape()
    {
        try {
            
            $crawler = Goutte::request('GET', $this->url);
            
            // Get the text content of the h1 tag
            $this->data = $crawler->filter('h1.name-big')->text();

            // Check if we have data
            if(!empty($this->data)) {
                $this->statusMessage = "Scraping completado exitosamente!";
            } else {
                $this->statusMessage = "El scraping se completó, pero no se encontró ninguna información.";
            }
        } catch (\Exception $e) {
            // Catch any errors and report them
            $this->statusMessage = "Ocurrió un error durante el scraping: " . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.scrape-component');
    }
}
