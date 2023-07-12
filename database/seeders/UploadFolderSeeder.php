<?php

namespace Database\Seeders;
use App\Models\UploadFolder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UploadFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UploadFolder::create([
            'name' => 'Apps',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'Pages',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'Verifications',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'Prize-Social',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'Themes',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'Profiles',
            'user_id' => 16,
            'active' => true,
        ]);
    
    }
}
