<?php

namespace Database\Factories;

use App\Models\Typemodelo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TypemodeloFactory extends Factory
{
    protected $model = Typemodelo::class;

    public function definition()
    {
        return [
			'name' =>$this->faker->randomElement(["independent","Studio","Webmaster", "Onlyfans","FaceXCam"]),
			'active' => 1
        ];
    }
}
