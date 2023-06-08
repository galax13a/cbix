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
       
       $rol4 = Role::create(['name'=>'tiper']);       
       $rol5 = Role::create(['name'=>'artist']);
       $rol0 = Role::create(['name'=>'guest']);
      
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
       $rol6 = Role::create(['name'=>'studio model']);
       $rol19 = Role::create(['name'=>'independent model']);
       $rol20 = Role::create(['name'=>'other']);

       Permission::create(['name' =>'root.dashboard']);              
       Permission::create(['name' =>'root.users']);
       Permission::create(['name' =>'root.apps']);    
       Permission::create(['name' =>'root.roles']);

       Permission::create(['name' =>'admin.dashboards']); 
       Permission::create(['name' =>'admin.themes']);
       Permission::create(['name' =>'admin.verify-accounts']);       
       Permission::create(['name' =>'admin.paymentbanks']);
       Permission::create(['name' =>'admin.payments']);
       Permission::create(['name' =>'admin.credits']);
       Permission::create(['name' =>'admin.categors']);    
       
       Permission::create(['name' =>'admin.cms']);       
       Permission::create(['name' =>'admin.cms.pages']);
       Permission::create(['name' =>'admin.cms.blog']);
       Permission::create(['name' =>'admin.cms.categorys']);
       Permission::create(['name' =>'admin.cms.config-site']);       

       Permission::create(['name' =>'admin.apps']);       
       Permission::create(['name' =>'admin.app.awards']);
       Permission::create(['name' =>'admin.app.forum']);
 
       /* permison hosts */ 
       
       Permission::create(['name' =>'host.admin']);       
       Permission::create(['name' =>'host.admin.api']);
       Permission::create(['name' =>'host.admin.profile']);       
       Permission::create(['name' =>'host.admin.affiliates']);
       Permission::create(['name' =>'host.admin.roles']);

       
       Permission::create(['name' =>'host.admin.apps']);       
       Permission::create(['name' =>'host.admin.apps.api']);
       Permission::create(['name' =>'host.admin.app.albums']);
       Permission::create(['name' =>'host.admin.app.albums.pics']);
       Permission::create(['name' =>'host.admin.app.albums.videos']);
       Permission::create(['name' =>'host.admin.app.albums.documents']);       
       Permission::create(['name' =>'host.admin.app.links']);
       Permission::create(['name' =>'host.admin.app.traffic']);   
       Permission::create(['name' =>'host.admin.app.notes']);       
       Permission::create(['name' =>'host.admin.app.dm']);
       Permission::create(['name' =>'host.admin.app.favorite-cams']);
       Permission::create(['name' =>'host.admin.app.love-letters']);
       Permission::create(['name' =>'host.admin.app.whishlist']);   
       Permission::create(['name' =>'host.admin.app.campaigns']); 
       
       Permission::create(['name' =>'host.admin.app.chaturbate']); 
       Permission::create(['name' =>'host.admin.app.studios']);
       Permission::create(['name' =>'host.admin.app.servercams']);
       Permission::create(['name' =>'host.admin.app.hostone']);
       Permission::create(['name' =>'host.admin.app.faceXcam']);
       Permission::create(['name' =>'host.admin.app.onlyFans']);
       Permission::create(['name' =>'host.admin.app.lives']);

       Permission::create(['name' =>'host.admin.app.socialmedia']); 
       Permission::create(['name' =>'host.admin.app.socialmedia.whatapp']);
       Permission::create(['name' =>'host.admin.app.socialmedia.telegram']);
       Permission::create(['name' =>'host.admin.app.socialmedia.instagram']);
       Permission::create(['name' =>'host.admin.app.socialmedia.tiktok']);
       

       Permission::create(['name' =>'host.admin.app.bots']);
       Permission::create(['name' =>'host.admin.app.bots.advertising-campaigns']);
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
       Permission::create(['name' =>'host.admin.app.crm.paymentsinvoice']);
       Permission::create(['name' =>'host.admin.app.crm.calendar']); 
       Permission::create(['name' =>'host.admin.app.crm.contacs']);
       Permission::create(['name' =>'host.admin.app.crm.typecontac']);  
       Permission::create(['name' =>'host.admin.app.crm.dm']);          
    
       Permission::create(['name' =>'host.admin.app.tools']);
       Permission::create(['name' =>'host.admin.app.tools.dolar-colombia']);
       Permission::create(['name' =>'host.admin.app.tools.test']);
       Permission::create(['name' =>'host.admin.app.tools.canva']);
       Permission::create(['name' =>'host.admin.app.tools.redux-imagens']);
       Permission::create(['name' =>'host.admin.app.tools.imgurl']);      
       Permission::create(['name' =>'host.admin.app.tools.dolar']);   
       Permission::create(['name' =>'host.admin.app.tools.cbhorus']);   
       Permission::create(['name' =>'host.admin.app.tools.traductor']);   
       Permission::create(['name' =>'host.admin.app.tools.bg-img-transparent']); 
       Permission::create(['name' =>'host.admin.app.tools.blog-chatur-es']); 
       Permission::create(['name' =>'host.admin.app.tools.blog-chatur-en']); 
       Permission::create(['name' =>'host.admin.app.tools.contracts']); 

    }
}

