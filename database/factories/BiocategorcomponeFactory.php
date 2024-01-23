<?php

namespace Database\Factories;

use App\Models\Biocategorcompone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BiocategorcomponeFactory extends Factory
{
    protected $model = Biocategorcompone::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'active' => $this->faker->name,
			'icon' => $this->faker->name,
        ];
    }
}
