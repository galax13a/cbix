<?php

namespace Database\Factories;

use App\Models\Biochaturbate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BiochaturbateFactory extends Factory
{
    protected $model = Biochaturbate::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'room' => $this->faker->name,
			'api' => $this->faker->name,
			'codex' => $this->faker->name,
			'bio' => $this->faker->name,
			'data' => $this->faker->name,
			'code' => $this->faker->name,
			'codebackup' => $this->faker->name,
			'share' => $this->faker->name,
			'link' => $this->faker->name,
			'campaign' => $this->faker->name,
			'pay' => $this->faker->name,
			'active' => $this->faker->name,
			'pic' => $this->faker->name,
        ];
    }
}
