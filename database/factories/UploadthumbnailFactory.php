<?php

namespace Database\Factories;

use App\Models\Uploadthumbnail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UploadthumbnailFactory extends Factory
{
    protected $model = Uploadthumbnail::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'width' => $this->faker->name,
			'height' => $this->faker->name,
			'active' => $this->faker->name,
        ];
    }
}
