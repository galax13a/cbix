<?php

namespace Database\Factories;

use App\Models\Adminapp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminappFactory extends Factory
{
    protected $model = Adminapp::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
