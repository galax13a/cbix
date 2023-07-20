<?php

namespace Database\Factories;

use App\Models\Backup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BackupFactory extends Factory
{
    protected $model = Backup::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'fileurl' => $this->faker->name,
        ];
    }
}
