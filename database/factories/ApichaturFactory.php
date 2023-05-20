<?php

namespace Database\Factories;

use App\Models\Apichatur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApichaturFactory extends Factory
{
    protected $model = Apichatur::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'api' => $this->faker->name,
			'active' => $this->faker->name,
			'page_id' => $this->faker->name,
        ];
    }
}
