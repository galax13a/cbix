<?php

namespace Database\Factories;

use App\Models\Themacom;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ThemacomFactory extends Factory
{
    protected $model = Themacom::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'pic' => $this->faker->name,
			'slug' => $this->faker->name,
			'codex' => $this->faker->name,
			'active' => $this->faker->name,
			'type' => $this->faker->name,
        ];
    }
}
