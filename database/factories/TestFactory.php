<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TestFactory extends Factory
{
    protected $model = Test::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
