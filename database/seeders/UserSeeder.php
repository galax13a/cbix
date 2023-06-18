<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        User::create([
            'name' => 'Root User',
            'email' => 'root@host.com',
            'password' => bcrypt('cr12345678') 
        ])->assignRole('root');

        // Crea un usuario con el rol "admin"
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@host.com',
            'password' => bcrypt('cr12345678')        
            ])->assignRole('admin');
    }
}
