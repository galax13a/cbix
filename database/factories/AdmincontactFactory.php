<?php

namespace Database\Factories;

use App\Models\Admincontact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdmincontactFactory extends Factory
{
    protected $model = Admincontact::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'nick_name' => $this->faker->name,
			'admincontacttag_id' => $this->faker->name,
			'active' => $this->faker->name,
			'email' => $this->faker->name,
			'birthday' => $this->faker->name,
			'phone_code' => $this->faker->name,
			'whatsapp' => $this->faker->name,
			'skype' => $this->faker->name,
			'telegram' => $this->faker->name,
			'tiktok' => $this->faker->name,
			'facebook' => $this->faker->name,
			'snapchat' => $this->faker->name,
			'x' => $this->faker->name,
			'discord' => $this->faker->name,
			'other' => $this->faker->name,
        ];
    }
}
