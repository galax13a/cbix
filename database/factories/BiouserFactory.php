<?php

namespace Database\Factories;

use App\Models\Biouser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BiouserFactory extends Factory
{
    protected $model = Biouser::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'codex' => $this->faker->name,
			'link' => $this->faker->name,
			'pay' => $this->faker->name,
        ];
    }
}
