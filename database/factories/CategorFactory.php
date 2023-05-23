<?php

namespace Database\Factories;

use App\Models\Categor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorFactory extends Factory
{
    protected $model = Categor::class;

    public function definition()
    {
        $names = ['chaturbate', 'stripchat', 'livestream','Bongacams', 'onlyfans','webcam','youtube','twitch','vimeo','instagram-hot','pornhub','tiktok-hot'];        
        return [
			'name' => $this->faker->randomElement($names),
			'active' => 1,
        ];
    }
}
