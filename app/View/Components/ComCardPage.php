<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ComCardPage extends Component
{
    /**
     * Create a new component instance.
     */
    public $data, $links;

    public function __construct()
    {
        $links_data=[ ['url' => '#tags', 'label' => '#Tags'],
                    ['url' => '#rooms', 'label' => '#Tops'],
                    ['url' => '#favorites', 'label' => '#Favorites'],
                    ['url' => '#winners', 'label' => '#Winners']];

                    $siteNames = ['🔺', '🔻']; // posibles valores
                    $randomSiteName = $siteNames[array_rand($siteNames)]; // selecciona uno al azar

                    $randomOnlineModels = rand(2500, 3700); // genera un número aleatorio entre 2500 y 3700
                    
                
        $data = [
            // Registro 1
            [
                'icon' => 'STR',
                'color' => 'stript-bg',
                'onlineModels' => "❤️ " . $randomOnlineModels . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'StripChat.com ' . $siteNames[array_rand($siteNames)],
                'links' =>   $links_data,
            ],
            [
                'icon' => 'BGC',
                'color' => 'pink-bg',
                'onlineModels' => "❤️ " . rand(1700, 1780) . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'BongaCams.com ' . $siteNames[array_rand($siteNames)],
                'links' =>   $links_data,
            ],
            [
                'icon' => 'CM4',
                'color' => 'cam4-bg',
                'onlineModels' => "❤️ " . rand(2500, 3700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'Cam4.com ' . $siteNames[array_rand($siteNames)],
                'links' =>   $links_data,
            ],
            // Registro 2
            [
                'icon' => 'MFC',
                'color' => 'green-bg',
                'onlineModels' => "❤️ " . rand(2500, 3700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'Myfreecams.com ' . $siteNames[array_rand($siteNames)],
                'links' => [
                    ['url' => '#Tops', 'label' => '#Tops'],
                    ['url' => '#Go', 'label' => '#GoMFC'],
                ],
            ],
            [
                'icon' => 'STM',
                'color' => 'blue-bg',
                'onlineModels' => "❤️ " . rand(2500, 3700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'Streamate.com ' . $siteNames[array_rand($siteNames)],
                'links' =>   $links_data,
            ],
            [
                'icon' => 'LVJ',
                'color' => 'red-bg',
                'onlineModels' => "❤️ " . rand(2500, 3700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'LiveJasmin.com ' . $siteNames[array_rand($siteNames)],
                'links' =>   $links_data,
           ],
           [
            'icon' => 'CTV',
            'color' => 'cherry-bg',
            'onlineModels' => "❤️ " . rand(2500, 3700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
            'siteName' => 'Cherry Tv' . $siteNames[array_rand($siteNames)],
            'links' =>   $links_data,
        ],
        [
            'icon' => 'CSD',
            'color' => 'soda-bg',
            'onlineModels' => "❤️ " . rand(2500, 3700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
            'siteName' => 'CamSoda.com ' . $siteNames[array_rand($siteNames)],
            'links' =>   $links_data,
        ],
            [
                'icon' => 'FxC',
                'color' => 'facexcam-bg',
                'onlineModels' => "❤️ " . rand(7500, 9700) . " Online Models", // genera un número aleatorio entre 2500 y 3700
                'siteName' => 'FaceXcam.com ' . $siteNames[array_rand($siteNames)],
                'links' => [
                    ['url' => '#laravel', 'label' => '#Tops'],
                    ['url' => '#Go', 'label' => '#Girls'],
                ],
            ],
            // Registro 3 y así sucesivamente...
        ];
        
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.com-card-page', [
            'data' => $this->data,
        ]);
    }
}
