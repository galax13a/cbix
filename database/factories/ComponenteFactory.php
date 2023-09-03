<?php

namespace Database\Factories;

use App\Models\Componente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ComponenteFactory extends Factory
{
    protected $model = Componente::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'pic' => $this->faker->name,
			'htmlcode' => $this->faker->name,
			'css' => $this->faker->name,
			'js' => $this->faker->name,
        ];
    }
}
