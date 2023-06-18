<?php

namespace Database\Factories;

use App\Models\Apps0tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Apps0tagFactory extends Factory
{
    protected $model = Apps0tag::class;

    public function definition()
    {
        return [
			'app_id' => $this->faker->name,
			'tag_id' => $this->faker->name,
        ];
    }
}
