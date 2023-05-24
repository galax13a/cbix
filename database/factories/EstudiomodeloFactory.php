<?php

namespace Database\Factories;

use App\Models\Estudiomodelo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstudiomodeloFactory extends Factory
{
    protected $model = Estudiomodelo::class;

    public function definition()
    {
        return [
			'estudio_id' => $this->faker->name,
			'modelo_id' => $this->faker->name,
        ];
    }
}
