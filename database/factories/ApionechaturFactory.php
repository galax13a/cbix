<?php

namespace Database\Factories;

use App\Models\Apionechatur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApionechaturFactory extends Factory
{
    protected $model = Apionechatur::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'api' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
