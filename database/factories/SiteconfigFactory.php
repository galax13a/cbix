<?php

namespace Database\Factories;

use App\Models\Siteconfig;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SiteconfigFactory extends Factory
{
    protected $model = Siteconfig::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'idioma' => $this->faker->name,
			'crm' => $this->faker->name,
			'apps' => $this->faker->name,
			'thumbnail' => $this->faker->name,
			'localimg' => $this->faker->name,
			's3amazon' => $this->faker->name,
			's3google' => $this->faker->name,
			'siteupkeep' => $this->faker->name,
			'code_google_anality' => $this->faker->name,
			'code_head_front' => $this->faker->name,
			'code_head_back' => $this->faker->name,
			'code_body_front' => $this->faker->name,
        ];
    }
}
