<?php

namespace Database\Factories;

use App\Models\Editor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EditorFactory extends Factory
{
    protected $model = Editor::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'pic' => $this->faker->name,
			'slug' => $this->faker->name,
			'htmlen' => $this->faker->name,
			'htmles' => $this->faker->name,
			'type' => $this->faker->name,
        ];
    }
}
