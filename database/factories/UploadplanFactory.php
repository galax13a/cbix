<?php

namespace Database\Factories;

use App\Models\Uploadplan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UploadplanFactory extends Factory
{
    protected $model = Uploadplan::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'megas' => $this->faker->name,
			'price_any' => $this->faker->name,
			'price_mes' => $this->faker->name,
			'des_es' => $this->faker->name,
			'des_en' => $this->faker->name,
			'plan_filex' => $this->faker->name,
			'plan' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
