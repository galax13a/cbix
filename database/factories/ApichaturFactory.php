<?php

namespace Database\Factories;

use App\Models\Apichatur;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApichaturFactory extends Factory
{
    protected $model = Apichatur::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'api' => "http://api.site.com",
			'active' => 1,
			'pagemaster_id' => $this->faker->randomElement(\App\Models\Pagemaster::pluck('id')->toArray()),
            'user_id' => $this->faker->randomElement(\App\Models\User::pluck('id')->toArray()),
            'modelo_id' => $this->faker->randomElement(\App\Models\Modelo::pluck('id')->toArray())
        ];
    }
}
