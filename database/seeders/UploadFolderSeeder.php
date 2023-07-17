<?php

namespace Database\Seeders;
use App\Models\UploadFolder;
use App\Models\Uploadsize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class UploadFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Uploadsize::create([
            'name' => 'Small',
            'width' => 260,
            'active' => true
        ]);

        Uploadsize::create([
            'name' => 'Medium',
            'width' => 520,
            'active' => true
        ]);

        Uploadsize::create([
            'name' => 'Hd',
            'width' => 1024,
            'active' => true
        ]);

        UploadFolder::create([
            'name' => 'apps',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'pages',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'verifications',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'prize-social',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'themes',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'profiles',
            'user_id' => 16,
            'active' => true,
        ]);

        UploadFolder::create([
            'name' => 'users',
            'user_id' => 16,
            'active' => true,
        ]);
        UploadFolder::create([
            'name' => 'system',
            'user_id' => 16,
            'active' => true,
        ]);

        //create directory
        $directories = [
            'public/system/images',
            'public/apps/images',
            'public/pages/images',
            'public/verifications/images',
            'public/prize-social/images',
            'public/themes/images',
            'public/profiles/images',
            'public/users/images',
        ];
        
        foreach ($directories as $directory) {
            $directory = strtolower($directory);
            
            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }
        }
        

    
    }
}
