<?php

namespace Database\Factories;

use App\Models\Uploadsize;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UploadsizeFactory extends Factory
{
    protected $model = Uploadsize::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'width' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
