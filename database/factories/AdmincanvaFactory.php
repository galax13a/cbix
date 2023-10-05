<?php

namespace Database\Factories;

use App\Models\Admincanva;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdmincanvaFactory extends Factory
{
    protected $model = Admincanva::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
        ];
    }
}
