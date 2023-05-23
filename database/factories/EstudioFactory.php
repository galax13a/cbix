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
			'name' => $this->faker->name,
			'city' => $this->faker->name,
			'dir' => $this->faker->name,
        ];
    }
}
