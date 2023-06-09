<?php

namespace Database\Factories;

use App\Models\Support;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SupportFactory extends Factory
{
    protected $model = Support::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'type_support' => $this->faker->name,
			'sent_by' => $this->faker->name,
			'support_id' => $this->faker->name,
			'message' => $this->faker->name,
			'reply_message' => $this->faker->name,
			'status' => $this->faker->name,
			'priority' => $this->faker->name,
        ];
    }
}
