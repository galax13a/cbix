<?php

namespace Database\Factories;

use App\Models\Adminsetting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminsettingFactory extends Factory
{
    protected $model = Adminsetting::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'pic' => $this->faker->name,
			'preferred_language' => $this->faker->name,
			'country' => $this->faker->name,
			'phone_number' => $this->faker->name,
			'bots' => $this->faker->name,
			'pagemaster_id' => $this->faker->name,
			'role_id' => $this->faker->name,
        ];
    }
}
