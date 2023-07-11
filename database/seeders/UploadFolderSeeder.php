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
            'user_id' => 1,
            'active' => true,
        ]);
    }
}
