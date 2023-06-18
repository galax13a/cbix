<?php

namespace Database\Factories;

use App\Models\Stat;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StatFactory extends Factory
{
    protected $model = Stat::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
