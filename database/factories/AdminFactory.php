<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'active' => $this->faker->name,
			'pic' => $this->faker->name,
        ];
    }
}
