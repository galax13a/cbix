<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {      
       $rol1 = Role::create(['name'=>'root']);
       $rol2 = Role::create(['name'=>'admin']);       
       $rol3 = Role::create(['name'=>'host']);
       
       $rol4 = Role::create(['name'=>'buyer']);       
       $rol5 = Role::create(['name'=>'artist']);
      
       $rol7 = Role::create(['name'=>'moderator']);
       $rol8 = Role::create(['name'=>'colaborator']);
       $rol9 = Role::create(['name'=>'editor']);
       $rol11 = Role::create(['name'=>'desing']);
       $rol12 = Role::create(['name'=>'sponsor']);
       $rol13 = Role::create(['name'=>'manager']);
       $rol14 = Role::create(['name'=>'partner']);
       $rol15 = Role::create(['name'=>'customer']);
       $rol16 = Role::create(['name'=>'webmaster']);
       $rol17 = Role::create(['name'=>'blogger']);
       $rol18 = Role::create(['name'=>'studio webcam']);
       $rol6 = Role::create(['name'=>'model']);
       $rol19 = Role::create(['name'=>'independent model']);
       $rol20 = Role::create(['name'=>'other']);

       Permission::create(['name' =>'root.admin' ]);
       Permission::create(['name' =>'admin.dashboard']);
       Permission::create(['name' =>'admin']);
       Permission::create(['name' =>'root.users']);
       Permission::create(['name' =>'admin.users']);
       Permission::create(['name' =>'admin.apps']);

       Permission::create(['name' =>'admin.cms']);
       Permission::create(['name' =>'admin.cms.pages']);
       Permission::create(['name' =>'admin.cms.blog']);
       Permission::create(['name' =>'admin.cms.categorys']);
       Permission::create(['name' =>'admin.cms.config-site']);

       Permission::create(['name' =>'admin.categrs']);
       
       Permission::create(['name' =>'admin.theme']);
       Permission::create(['name' =>'admin.verify-accounts']);       
       Permission::create(['name' =>'admin.paymentbank']);
       Permission::create(['name' =>'admin.payments']);
       Permission::create(['name' =>'admin.credits']);
       Permission::create(['name' =>'admin.app.tokens']);
       Permission::create(['name' =>'admin.app.awards']);
       Permission::create(['name' =>'admin.app.forum']);

       /* permison hosts */ 
       
       Permission::create(['name' =>'host.admin']);       
       Permission::create(['name' =>'host.admin.api']);
       Permission::create(['name' =>'host.admin.profile']);       
       Permission::create(['name' =>'host.admin.affiliates']);

       
       Permission::create(['name' =>'host.admin.apps']);       
       Permission::create(['name' =>'host.admin.app.albums']);
       Permission::create(['name' =>'host.admin.app.studios']);       
       Permission::create(['name' =>'host.admin.app.links']);
       Permission::create(['name' =>'host.admin.app.traffic']);   
       Permission::create(['name' =>'host.admin.app.notes']);       
       Permission::create(['name' =>'host.admin.app.dm']);
       Permission::create(['name' =>'host.admin.app.favorite-cams']);
       Permission::create(['name' =>'host.admin.app.love-letters']);

       Permission::create(['name' =>'host.admin.app.bots']);
       Permission::create(['name' =>'host.admin.app.bots.whatsapp']);       
       Permission::create(['name' =>'host.admin.app.bots.telegram']);       
       
       Permission::create(['name' =>'host.admin.app.chaturbate']);
       Permission::create(['name' =>'host.admin.app.chaturbate.api']);
       Permission::create(['name' =>'host.admin.app.chaturbate.bios']);
       Permission::create(['name' =>'host.admin.app.chaturbate.affiliates']);   
       Permission::create(['name' =>'host.admin.app.chaturbate.share']);   
       
       Permission::create(['name' =>'host.admin.app.awards']); 
       Permission::create(['name' =>'host.admin.app.awards.topics']);      
       Permission::create(['name' =>'host.admin.app.awards.prizes']);
       Permission::create(['name' =>'host.admin.app.awards.ideas-show']);
       

       Permission::create(['name' =>'host.admin.app.crm']);            
       Permission::create(['name' =>'host.admin.app.crm.taks']);
       Permission::create(['name' =>'host.admin.app.crm.teams']);
       Permission::create(['name' =>'host.admin.app.crm.support']);
       Permission::create(['name' =>'host.admin.app.crm.calendar']); 
       Permission::create(['name' =>'host.admin.app.crm.contacs']);
       Permission::create(['name' =>'host.admin.app.crm.dm']);
       Permission::create(['name' =>'host.admin.app.crm.whishlist']);   
       Permission::create(['name' =>'host.admin.app.crm.campaigns']); 
       Permission::create(['name' =>'host.admin.app.crm.socialmedia']);        

       Permission::create(['name' =>'host.admin.tools.test']);
       Permission::create(['name' =>'host.admin.tools.canva']);
       Permission::create(['name' =>'host.admin.tools.redux-imagens']);
       Permission::create(['name' =>'host.admin.tools.imgurl']);      

    }
}

