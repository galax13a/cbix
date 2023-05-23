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
			'name' => $this->faker->name,
			'title' => $this->faker->name,
			'slug' => $this->faker->name,
			'content' => $this->faker->name,
			'meta_title' => $this->faker->name,
			'meta_keywords' => $this->faker->name,
			'meta_description' => $this->faker->name,
			'featured_image' => $this->faker->name,
			'active' => 1,
			'user_id' => 1
        ];
    }
}
