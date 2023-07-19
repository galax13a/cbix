<?php

namespace Database\Seeders;
use App\Models\UploadFolder;
use App\Models\Uploadsize;
use App\Models\Uploadthumbnail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\UploadPlan;

class UploadFolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $plans = [
            [
                'name' => 'Plan System',
                'megas' => 30000, // 500 megabytes
                'des_en' => 'Plan  de storage',
                'des_es' => 'Plan almacenamiento',
                'plan_filex' => 'files',
                'plan' => 'system',
                'active' => true,
                'price_any' => rand(15, 150) / 10, // Random value between 1.5 and 15
                'price_mes' => rand(15, 150) / 10, // Random value between 1.5 and 15
            ],
            [
                'name' => 'Plan Free 3 megas',
                'megas' => 3, // 500 megabytes
                'des_en' => 'Plan free con 3 MB de storage',
                'des_es' => 'Plan gratuito con 3 MB de almacenamiento',
                'plan_filex' => 'pics',
                'plan' => 'free',
                'active' => true,
                'price_any' => rand(15, 150) / 10, // Random value between 1.5 and 15
                'price_mes' => rand(15, 150) / 10, // Random value between 1.5 and 15
            ],
            [
                'name' => 'Plan Magic Models Free',
                'megas' => 10, // 500 megabytes
                'des_en' => 'Plan free 10 Modelstorage',
                'des_es' => 'Plan 10 gratuito Model de almacenamiento',
                'plan_filex' => 'pics',
                'plan' => 'free',
                'active' => true,
                'price_any' => rand(15, 150) / 10, // Random value between 1.5 and 15
                'price_mes' => rand(15, 150) / 10, // Random value between 1.5 and 15
            ],
            [
                'name' => 'Plan Semi Pro',
                'megas' => 500, // 5000 megabytes
                'des_en' => 'Plan free con 500 MB de storage',
                'des_es' => 'Plan gratuito con 500 MB de almacenamiento',
                'plan_filex' => 'pics',
                'plan' => 'pro',
                'active' => true,
                'price_any' => rand(15, 150) / 10, // Random value between 1.5 and 15
                'price_mes' => rand(15, 150) / 10, // Random value between 1.5 and 15
            ],
            [
                'name' => 'Plan Pro 1 Gigas',
                'megas' => 1000, // 1000 megabytes
                'des_en' => 'Plan Pro de Storage',
                'des_es' => 'Plan Pro ',
                'plan_filex' => 'pics',
                'plan' => 'pro',
                'active' => true,
                'price_any' => rand(15, 150) / 10, // Random value between 1.5 and 15
                'price_mes' => rand(15, 150) / 10, // Random value between 1.5 and 15
            ],
            [
                'name' => 'Plan Pro 5 Gigas',
                'megas' => 5000, // 1000 megabytes
                'des_en' => 'Plan Pro de Storage',
                'des_es' => 'Plan Pro fotos y gallery',
                'plan_filex' => 'pics',
                'plan' => 'pro',
                'active' => true,
                'price_any' => rand(15, 150) / 10, // Random value between 1.5 and 15
                'price_mes' => rand(15, 150) / 10, // Random value between 1.5 and 15
            ],
            // Add more plans here if desired
        ];
        
        foreach ($plans as $plan) {
            UploadPlan::create($plan);
        }
        
        Uploadthumbnail::create([
            'name'=> 'defaul',
            'width' => 360,
            'height' => 360,
            'active' => true

        ]);

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
