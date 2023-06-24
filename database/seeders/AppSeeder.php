<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\App;
use Faker\Factory as Faker;


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
        
        $faker = Faker::create();

        App::create([
            'name' => 'CRM',
            'slug' => $faker->slug,
            'description' => 'Discover our new CMS app, your easy and fast solution for content management. With our intuitive editor, customize your website and publish content in minutes. Optimized for SEO and with high security, simplify your online presence. Install it now and start creating!',
            'is_approved' => false,
            'apps_categors_id' => 1,
            'meta_title' => 'Powerful CMS App for Easy Content Management | Streamline Your Online Presence',
            'meta_description' => 'Manage and publish content effortlessly with our powerful CMS app. Customize your website, optimize for SEO, and enhance your online presence. Install now and simplify content management',
            'meta_keywords' => 'CMS app, content management, website customization, SEO optimization, online presence, content publishing, easy management, powerful solution.',
            'active' => true,
        ]);
        
        App::create([
            'name' => 'Bots',
            'slug' => $faker->slug,
            'description' => 'Discover Bots next generation app, your easy and fast solution for content management. With our intuitive editor, customize your website and publish content in minutes. Optimized for SEO and with high security, simplify your online presence. Install it now and start creating!',
            'is_approved' => false,
            'apps_categors_id' => 1,
            'meta_title' => 'Powerful CMS App for Easy Content Management | Streamline Your Online Presence',
            'meta_description' => 'Manage and publish content effortlessly with our powerful CMS app. Customize your website, optimize for SEO, and enhance your online presence. Install now and simplify content management',
            'meta_keywords' => 'CMS app, content management, website customization, SEO optimization, online presence, content publishing, easy management, powerful solution.',
            'active' => true,
        ]);

        App::create([
            'name' => 'StuioWC',
            'slug' => $faker->slug,
            'description' => 'Introducing app studio webcam management app, designed to streamline and optimize your modeling career. With our app, you have complete control over your modeling activities, statistics, and payments, empowering you to take your webcam modeling business to new heights.',
            'is_approved' => true,
            'apps_categors_id' => 2,
            'meta_title' => 'studio webcam management app2',
            'meta_description' => 'Our app provides a comprehensive dashboard that allows you to manage all aspects of your modeling career in one place. Easily track your performance statistics, including viewership, earnings, and audience engagement',
            'meta_keywords' => 'webcam modeling app, model management, performance statistics, earnings tracking, payment processing, scheduling, audience engagement, fan base growth, private chats, tip menus, collaborative opportunities, privacy protection',
            'active' => false,
        ]);

        App::create([
            'name' => 'Dolar Cop',
            'slug' => $faker->slug,
            'description' => 'En un mundo cada vez más globalizado, el comercio internacional y los viajes se han vuelto más comunes que nunca. En este contexto, el cambio de divisas se convierte en un aspecto crucial a considerar para aquellos que necesitan convertir su moneda local a una extranjera o viceversa. En el caso de Colombia, el dólar estadounidense es una de las monedas más relevantes. Es por eso que contar con una aplicación confiable que ofrezca información actualizada sobre el tipo de cambio del dólar frente al peso colombiano se vuelve esencial. En este artículo, presentaremos la aplicación "Dólar en Colombia", una herramienta que te mantendrá informado y te ayudará a tomar decisiones financieras acertadas.        ¿Qué es la aplicación "Dólar en Colombia"?            
             La aplicación "Dólar en Colombia" es una plataforma diseñada para proporcionar información en tiempo real sobre el tipo de cambio entre el dólar estadounidense y el peso colombiano. Con una interfaz amigable y de fácil navegación, esta aplicación se convierte en tu aliada para monitorear y analizar las fluctuaciones del mercado cambiario.',
            'is_approved' => true,
            'apps_categors_id' => 2,
            'meta_title' => 'studio webcam management app2',
            'meta_description' => 'Our app provides a comprehensive dashboard that allows you to manage all aspects of your modeling career in one place. Easily track your performance statistics, including viewership, earnings, and audience engagement',
            'meta_keywords' => 'webcam modeling app, model management, performance statistics, earnings tracking, payment processing, scheduling, audience engagement, fan base growth, private chats, tip menus, collaborative opportunities, privacy protection',
            'active' => false,
        ]);

        App::create([
            'name' => 'Editor Profile',
            'slug' => $faker->slug,
            'description' => 'La Aplicación para Editar y Mejorar tu Perfil en Chaturbate  <br>  Chaturbate es una plataforma popular que ofrece una experiencia interactiva para adultos a través de transmisiones en vivo. Si eres un modelo en Chaturbate, sabes que tener un perfil atractivo y bien diseñado puede marcar la diferencia en la captación de audiencia y el éxito de tus transmisiones. Es por eso que te presentamos "ChaturProfile", una aplicación diseñada específicamente para ayudarte a editar y mejorar tu perfil en Chaturbate. En este artículo, exploraremos las características y beneficios de esta innovadora herramienta.',            
            'is_approved' => true,
            'apps_categors_id' => 2,
            'meta_title' => 'studio webcam management app2',
            'meta_description' => 'Our app provides a comprehensive dashboard that allows you to manage all aspects of your modeling career in one place. Easily track your performance statistics, including viewership, earnings, and audience engagement',
            'meta_keywords' => 'webcam modeling app, model management, performance statistics, earnings tracking, payment processing, scheduling, audience engagement, fan base growth, private chats, tip menus, collaborative opportunities, privacy protection',
            'active' => false,
        ]);

        App::create([
            'name' => 'CRM',
            'slug' => $faker->slug,
            'description' => 'Discover our new CMS app, your easy and fast solution for content management. With our intuitive editor, customize your website and publish content in minutes. Optimized for SEO and with high security, simplify your online presence. Install it now and start creating!',
            'is_approved' => false,
            'apps_categors_id' => 1,
            'meta_title' => 'Powerful CMS App for Easy Content Management | Streamline Your Online Presence',
            'meta_description' => 'Manage and publish content effortlessly with our powerful CMS app. Customize your website, optimize for SEO, and enhance your online presence. Install now and simplify content management',
            'meta_keywords' => 'CMS app, content management, website customization, SEO optimization, online presence, content publishing, easy management, powerful solution.',
            'active' => true,
        ]);
        
        App::create([
            'name' => 'Bots',
            'slug' => $faker->slug,
            'description' => 'Discover Bots next generation app, your easy and fast solution for content management. With our intuitive editor, customize your website and publish content in minutes. Optimized for SEO and with high security, simplify your online presence. Install it now and start creating!',
            'is_approved' => false,
            'apps_categors_id' => 1,
            'meta_title' => 'Powerful CMS App for Easy Content Management | Streamline Your Online Presence',
            'meta_description' => 'Manage and publish content effortlessly with our powerful CMS app. Customize your website, optimize for SEO, and enhance your online presence. Install now and simplify content management',
            'meta_keywords' => 'CMS app, content management, website customization, SEO optimization, online presence, content publishing, easy management, powerful solution.',
            'active' => true,
        ]);

        App::create([
            'name' => 'StuioWC',
            'slug' => $faker->slug,
            'description' => 'Introducing app studio webcam management app, designed to streamline and optimize your modeling career. With our app, you have complete control over your modeling activities, statistics, and payments, empowering you to take your webcam modeling business to new heights.',
            'is_approved' => true,
            'apps_categors_id' => 2,
            'meta_title' => 'studio webcam management app2',
            'meta_description' => 'Our app provides a comprehensive dashboard that allows you to manage all aspects of your modeling career in one place. Easily track your performance statistics, including viewership, earnings, and audience engagement',
            'meta_keywords' => 'webcam modeling app, model management, performance statistics, earnings tracking, payment processing, scheduling, audience engagement, fan base growth, private chats, tip menus, collaborative opportunities, privacy protection',
            'active' => false,
        ]);

        App::create([
            'name' => 'Dolar Cop',
            'slug' => $faker->slug,
            'description' => 'En un mundo cada vez más globalizado, el comercio internacional y los viajes se han vuelto más comunes que nunca. En este contexto, el cambio de divisas se convierte en un aspecto crucial a considerar para aquellos que necesitan convertir su moneda local a una extranjera o viceversa. En el caso de Colombia, el dólar estadounidense es una de las monedas más relevantes. Es por eso que contar con una aplicación confiable que ofrezca información actualizada sobre el tipo de cambio del dólar frente al peso colombiano se vuelve esencial. En este artículo, presentaremos la aplicación "Dólar en Colombia", una herramienta que te mantendrá informado y te ayudará a tomar decisiones financieras acertadas.        ¿Qué es la aplicación "Dólar en Colombia"?            
             La aplicación "Dólar en Colombia" es una plataforma diseñada para proporcionar información en tiempo real sobre el tipo de cambio entre el dólar estadounidense y el peso colombiano. Con una interfaz amigable y de fácil navegación, esta aplicación se convierte en tu aliada para monitorear y analizar las fluctuaciones del mercado cambiario.',
            'is_approved' => true,
            'apps_categors_id' => 2,
            'meta_title' => 'studio webcam management app2',
            'meta_description' => 'Our app provides a comprehensive dashboard that allows you to manage all aspects of your modeling career in one place. Easily track your performance statistics, including viewership, earnings, and audience engagement',
            'meta_keywords' => 'webcam modeling app, model management, performance statistics, earnings tracking, payment processing, scheduling, audience engagement, fan base growth, private chats, tip menus, collaborative opportunities, privacy protection',
            'active' => false,
        ]);

        App::create([
            'name' => 'Editor Profile',
            'slug' => $faker->slug,
            'description' => 'La Aplicación para Editar y Mejorar tu Perfil en Chaturbate  <br>  Chaturbate es una plataforma popular que ofrece una experiencia interactiva para adultos a través de transmisiones en vivo. Si eres un modelo en Chaturbate, sabes que tener un perfil atractivo y bien diseñado puede marcar la diferencia en la captación de audiencia y el éxito de tus transmisiones. Es por eso que te presentamos "ChaturProfile", una aplicación diseñada específicamente para ayudarte a editar y mejorar tu perfil en Chaturbate. En este artículo, exploraremos las características y beneficios de esta innovadora herramienta.',            
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
