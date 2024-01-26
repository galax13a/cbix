<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Biocategorcompone;

class BiocategorcomponeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'id' => 1,
                'name' => 'Text Content',
                'active' => 1,
                'icon' => '<i class=\'bx bx-right-indent\' ></i>',
                'created_at' => '2024-01-23 07:29:39',
                'updated_at' => '2024-01-23 22:58:05',
            ],
            [
                'id' => 2,
                'name' => 'Cards',
                'active' => 1,
                'icon' => '<i class=\'bx bxs-id-card\' ></i>',
                'created_at' => '2024-01-23 07:39:38',
                'updated_at' => '2024-01-23 07:39:38',
            ],
            [
                'id' => 3,
                'name' => 'Links',
                'active' => 1,
                'icon' => '<i class=\'bx bx-navigation\' ></i>',
                'created_at' => '2024-01-23 07:39:54',
                'updated_at' => '2024-01-23 22:45:27',
            ],
            [
                'id' => 4,
                'name' => 'Social Net',
                'active' => 1,
                'icon' => '<i class=\'bx bxl-tiktok\' ></i>',
                'created_at' => '2024-01-23 07:40:13',
                'updated_at' => '2024-01-23 22:36:49',
            ],
            [
                'id' => 5,
                'name' => 'Tip Menu',
                'active' => 1,
                'icon' => '<i class=\'bx bx-party\' ></i>',
                'created_at' => '2024-01-23 07:41:45',
                'updated_at' => '2024-01-23 07:41:45',
            ],
            [
                'id' => 6,
                'name' => 'Lovense',
                'active' => 1,
                'icon' => '<i class=\'bx bx-pulse\' ></i>',
                'created_at' => '2024-01-23 07:54:52',
                'updated_at' => '2024-01-23 22:55:38',
            ],
            [
                'id' => 7,
                'name' => 'DMCA',
                'active' => 1,
                'icon' => '<i class=\'bx bxs-registered\' ></i>',
                'created_at' => '2024-01-23 08:00:43',
                'updated_at' => '2024-01-23 22:56:59',
            ],
            [
                'id' => 8,
                'name' => 'Wish List',
                'active' => 1,
                'icon' => '<i class=\'bx bx-gift\' ></i>',
                'created_at' => '2024-01-23 22:42:55',
                'updated_at' => '2024-01-23 22:42:55',
            ],
            [
                'id' => 9,
                'name' => 'Pointer',
                'active' => 1,
                'icon' => '<i class=\'bx bx-pointer\' ></i>',
                'created_at' => '2024-01-23 22:49:33',
                'updated_at' => '2024-01-23 22:49:59',
            ],
        ];

        Biocategorcompone::insert($data);
     }
    
}
