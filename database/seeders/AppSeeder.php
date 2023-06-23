<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\App;

class AppSeeder extends Seeder
{
    public function run()
    {
        // Crea registros de ejemplo en la tabla "apps"

        DB::table('apps0categors')->insert([
            [
                'name' => 'server',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'apps',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'web',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros si es necesario
        ]);

        App::create([
            'name' => 'CRM',
            'description' => 'Discover our new CMS app, your easy and fast solution for content management. With our intuitive editor, customize your website and publish content in minutes. Optimized for SEO and with high security, simplify your online presence. Install it now and start creating!',
            'is_approved' => false,
            'apps_categors_id' => 1,
            'meta_title' => 'Powerful CMS App for Easy Content Management | Streamline Your Online Presence',
            'meta_description' => 'Manage and publish content effortlessly with our powerful CMS app. Customize your website, optimize for SEO, and enhance your online presence. Install now and simplify content management',
            'meta_keywords' => 'CMS app, content management, website customization, SEO optimization, online presence, content publishing, easy management, powerful solution.',
            'active' => false,
        ]);

        App::create([
            'name' => 'StuioWC',
            'description' => 'Introducing app studio webcam management app, designed to streamline and optimize your modeling career. With our app, you have complete control over your modeling activities, statistics, and payments, empowering you to take your webcam modeling business to new heights.',
            'is_approved' => true,
            'apps_categors_id' => 2,
            'meta_title' => 'studio webcam management app2',
            'meta_description' => 'Our app provides a comprehensive dashboard that allows you to manage all aspects of your modeling career in one place. Easily track your performance statistics, including viewership, earnings, and audience engagement',
            'meta_keywords' => 'webcam modeling app, model management, performance statistics, earnings tracking, payment processing, scheduling, audience engagement, fan base growth, private chats, tip menus, collaborative opportunities, privacy protection',
            'active' => false,
        ]);

        // Agrega más registros de ejemplo si es necesario

        // ...

    }
}
