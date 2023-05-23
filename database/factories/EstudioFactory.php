<?php

namespace Database\Factories;

use App\Models\Estudio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstudioFactory extends Factory
{
    protected $model = Estudio::class;

    public function definition()
    {
        return [
			'name' => $this->faker->randomElement(['Estudio 1', 'Estudio 2', 'Estudio 3']),
			'city' => $this->faker->name,
			'dir' => null,
            'user_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray())
        ];
    }
}
