<?php

namespace Database\Factories;

use App\Models\Pagemaster;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PagemasterFactory extends Factory
{
    protected $model = Pagemaster::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'url' => $this->faker->name,
			'afiliate' => $this->faker->name,
			'logo' => $this->faker->name,
			'api' => $this->faker->name,
			'api2' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
