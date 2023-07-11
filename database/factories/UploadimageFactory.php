<?php

namespace Database\Factories;

use App\Models\Uploadimage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UploadimageFactory extends Factory
{
    protected $model = Uploadimage::class;

    public function definition()
    {
        return [
			'uploadfolder_id' => $this->faker->name,
			'name' => $this->faker->name,
			'size' => $this->faker->name,
			'url' => $this->faker->name,
			'extension' => $this->faker->name,
        ];
    }
}
