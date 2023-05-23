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
			'nick2' => null,
			'email' => $this->faker->email,
			'dni' => $this->faker->randomNumber(8),
			'wsp' => $this->faker->randomNumber(8),
			'porce' => 60,
			'typemodelo_id' =>  $this->faker->randomElement(\App\Models\Typemodelo::pluck('id')->toArray()),
			'img' => null,
			'active' => 1,
			'user_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray())
        ];
    }
}
