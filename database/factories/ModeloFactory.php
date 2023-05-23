<?php

namespace Database\Factories;

use App\Models\Modelo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ModeloFactory extends Factory
{
    protected $model = Modelo::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'nick' => $this->faker->name,
			'nick2' => $this->faker->name,
			'email' => $this->faker->name,
			'dni' => $this->faker->name,
			'wsp' => $this->faker->name,
			'porce' => $this->faker->name,
			'typemodelo_id' => $this->faker->name,
			'img' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
