<?php

namespace Database\Factories;

use App\Models\Adminguest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminguestFactory extends Factory
{
    protected $model = Adminguest::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
