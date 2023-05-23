<?php

namespace Database\Factories;

use App\Models\Pagemaster;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PagemasterFactory extends Factory
{
    protected $model = Pagemaster::class;

    public function definition()
    {
		$names = ['chaturbate.com', 'stripchat.com', 'cam4.com','Bongacams.com', 'onlyfans','amateur.tv'];        
        return [
			'name' => $this->faker->randomElement($names),
			'url' => $this->faker->url,
			'afiliate' => $this->faker->name,
			'logo' => "logos/webmaster/logo.png",
			'api' => "api.site.com",
			'api2' => null,
			'active' => 1
        ];
    }
}
