<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Si el usuario "Cristhian Ryu" ya existe, genera usuarios aleatorios.
        if (\App\Models\User::where('email', 'galax13a@yahoo.es')->exists()) {
            return [
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->safeEmail,
                'password' => Hash::make('12345678'), // Considere usar algo como Hash::make($this->faker->password) para contraseñas aleatorias
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ];
        } else{
        
        // Si el usuario "Cristhian Ryu" no existe, créalo.
        return [
            'name' => "Cristhian Ryu",
            'email' => 'galax13a@yahoo.es',
            'password' => Hash::make('12345678'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
    }
    
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
