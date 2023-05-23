<?php

namespace Database\Factories;

use App\Models\Categor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorFactory extends Factory
{
    protected $model = Categor::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'active' => 1,
        ];
    }
}
