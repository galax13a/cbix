<?php

namespace Database\Factories;

use App\Models\Uploadfolder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UploadfolderFactory extends Factory
{
    protected $model = Uploadfolder::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
