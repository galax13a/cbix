<?php

namespace Database\Factories;

use App\Models\Adminfavorite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminfavoriteFactory extends Factory
{
    protected $model = Adminfavorite::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'url' => $this->faker->name,
			'pic' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
