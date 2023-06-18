<?php

namespace Database\Factories;

use App\Models\Support;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupportFactory extends Factory
{
    protected $model = Support::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'description' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
