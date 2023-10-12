<?php

namespace Database\Factories;

use App\Models\Adminpremium;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminpremiumFactory extends Factory
{
    protected $model = Adminpremium::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'content' => $this->faker->name,
			'plan' => $this->faker->name,
			'subcription' => $this->faker->name,
			'time' => $this->faker->name,
			'bots' => $this->faker->name,
			'linkpay' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
