<?php

namespace Database\Factories;

use App\Models\Admincontacttag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdmincontacttagFactory extends Factory
{
    protected $model = Admincontacttag::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
