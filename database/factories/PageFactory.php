<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PageFactory extends Factory
{
    protected $model = Page::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'name' => $this->faker->name,
			'url' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
