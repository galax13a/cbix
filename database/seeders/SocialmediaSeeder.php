<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialmediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $socialMediaData = [
            [
                'name' => 'https://www.facebook.com',
                'icon' => "<i class='bx bxl-facebook-circle' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.twitter.com',
                'icon' => "<i class='bx bxl-twitter' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.instagram.com',
                'icon' => "<i class='bx bxl-instagram' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.linkedin.com',
                'icon' => "<i class='bx bxl-linkedin-square' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.youtube.com',
                'icon' => "<i class='bx bxl-youtube' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.pinterest.com',
                'icon' => "<i class='bx bxl-pinterest' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.snapchat.com',
                'icon' => "<i class='bx bxl-snapchat' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.reddit.com',
                'icon' => "<i class='bx bxl-reddit' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.tumblr.com',
                'icon' => "<i class='bx bxl-tumblr' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.twitch.com',
                'icon' => "<i class='bx bxl-twitch' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.whatsapp.com',
                'icon' => "<i class='bx bxl-whatsapp' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.skype.com',
                'icon' => "<i class='bx bxl-skype' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.telegram.com',
                'icon' => "<i class='bx bxl-telegram' ></i>",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://Stripchat.com',           
                'icon' => 'none.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.chaturbate.com', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.cam4.com', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.bongacams.com', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.camsoda.com', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.myfreecams.com', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://www.imlive.com', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://streamate.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://xlove.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],   
           
            [
                'name' => ' https://www.amateur.tv/  ', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://livejasmin.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://pornhub.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://manyvids.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'https://onlyfans.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],            
            [
                'name' => 'https://your-site.com/', 
                'icon' => 'none.png',          
                'created_at' => now(),
                'updated_at' => now(),
            ],       
            
            
        ];

            DB::table('socialmedias')->insert($socialMediaData);
       }
    
}
