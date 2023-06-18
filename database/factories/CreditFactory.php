<?php

namespace Database\Factories;

use App\Models\Credit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CreditFactory extends Factory
{
    protected $model = Credit::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'amount' => $this->faker->name,
        ];
    }
}
