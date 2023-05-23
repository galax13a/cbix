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
			'name' =>$this->faker->randomElement(["Como funciona","download","ayuda", "webcams-vivo","FaceXCam"]),
			'title' => $this->faker->sentence,
			'slug' => $this->faker->slug,
			'content' => $this->faker->name,
			'meta_title' => null,
			'meta_keywords' => null,
			'meta_description' => null,
			'featured_image' => null,
			'active' => 1,
			'user_id' => 1
        ];
    }
}
