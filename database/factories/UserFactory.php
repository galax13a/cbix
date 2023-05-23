<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition(): array
    {
        $email = 'galax13a@yahoo.es';

        if (\App\Models\User::where('email', $email)->exists()) {
            // El usuario "Cristhian Ryu" no existe, créalo.
            return [
                'name' => "Cristhian Ryu",
                'email' => $email,
                'password' => Hash::make('12345678'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ];
        }

        // El usuario "Cristhian Ryu" ya existe, genera usuarios aleatorios.
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }   


}
