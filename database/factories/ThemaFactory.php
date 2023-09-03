<?php

namespace Database\Factories;

use App\Models\Thema;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ThemaFactory extends Factory
{
    protected $model = Thema::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'pic' => $this->faker->name,
			'slug' => $this->faker->name,
			'htmlen' => $this->faker->name,
			'htmles' => $this->faker->name,
			'css' => $this->faker->name,
			'js' => $this->faker->name,
			'active' => $this->faker->name,
			'type' => $this->faker->name,
        ];
    }
}
