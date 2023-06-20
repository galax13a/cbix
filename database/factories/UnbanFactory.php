<?php

namespace Database\Factories;

use App\Models\Unban;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UnbanFactory extends Factory
{
    protected $model = Unban::class;

    public function definition()
    {
        return [
			'sent_by' => $this->faker->name,
			'resolved_by' => $this->faker->name,
			'comment' => $this->faker->name,
			'reply_comment' => $this->faker->name,
			'email' => $this->faker->name,
			'status' => $this->faker->name,
        ];
    }
}
