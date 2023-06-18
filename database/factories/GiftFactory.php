<?php

namespace Database\Factories;

use App\Models\Gift;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GiftFactory extends Factory
{
    protected $model = Gift::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'description' => $this->faker->name,
			'cost' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
