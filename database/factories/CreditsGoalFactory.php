<?php

namespace Database\Factories;

use App\Models\CreditsGoal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CreditsGoalFactory extends Factory
{
    protected $model = CreditsGoal::class;

    public function definition()
    {
        return [
			'goal' => $this->faker->name,
			'credits_reward' => $this->faker->name,
        ];
    }
}
