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
        User::factory(15)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        \App\Models\Categor::factory(3)->create();    // create category         
        //Page::factory()->count(15)->create();        // create page      
        \App\Models\Typemodelo::factory(4)->create(); // create  Typemodelo    
        \App\Models\Pagemaster::factory(3)->create(); // create Pagemaster  
        \App\Models\Modelo::factory(3)->create(); //create Modelo     
        \App\Models\Estudio::factory(3)->create(); //crate studio
        \App\Models\Apichatur::factory(3)->create(); // create apichatur
        $this->call(AppSeeder::class);
        $this->call(UploadFolderSeeder::class);
       

    }
}
