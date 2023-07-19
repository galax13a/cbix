<?php

namespace Database\Factories;

use App\Models\UploadsizesThumbnail;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UploadsizesThumbnailFactory extends Factory
{
    protected $model = UploadsizesThumbnail::class;

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
