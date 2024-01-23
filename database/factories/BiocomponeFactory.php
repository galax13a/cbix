<?php

namespace Database\Factories;

use App\Models\Biocompone;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BiocomponeFactory extends Factory
{
    protected $model = Biocompone::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'img' => $this->faker->name,
			'code' => $this->faker->name,
			'js' => $this->faker->name,
			'biocategorcompone_id' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
