<?php

namespace Database\Factories;

use App\Models\App;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AppFactory extends Factory
{
    protected $model = App::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'description' => $this->faker->name,
			'is_approved' => $this->faker->name,
			'apps_categors_id' => $this->faker->name,
			'meta_title' => $this->faker->name,
			'meta_description' => $this->faker->name,
			'meta_keywords' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
