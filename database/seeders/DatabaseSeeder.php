<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //\App\Models\User::factory(3)->create(); 
        User::factory(1)->create();
        \App\Models\Categor::factory(3)->create();             
        Page::factory()->count(10)->create();      
        $user = User::factory()->create(); // create a user
        Page::factory()->for($user)->count(5)->create(); // create 10 pages for that user
        \App\Models\Typemodelo::factory(3)->create();   
       // \App\Models\User::factory(1)->create(); 

    }
}
