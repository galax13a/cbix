<?php

namespace Database\Factories;

use App\Models\Appseditor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AppseditorFactory extends Factory
{
    protected $model = Appseditor::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'slug' => $this->faker->name,
			'es' => $this->faker->name,
			'en' => $this->faker->name,
			'editorjs' => $this->faker->name,
			'version' => $this->faker->name,
			'menu' => $this->faker->name,
			'url' => $this->faker->name,
			'target' => $this->faker->name,
			'icon' => $this->faker->name,
			'image' => $this->faker->name,
			'download_url' => $this->faker->name,
			'is_approved' => $this->faker->name,
			'install' => $this->faker->name,
			'apps_categors_id' => $this->faker->name,
			'meta_title' => $this->faker->name,
			'meta_description' => $this->faker->name,
			'meta_keywords' => $this->faker->name,
			'active' => $this->faker->name,
			'downloads' => $this->faker->name,
			'downloads_bot' => $this->faker->name,
        ];
    }
}
