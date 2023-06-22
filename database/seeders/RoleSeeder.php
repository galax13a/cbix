<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {      
       $rol1 = Role::create(['name'=>'root']);
       $rol2 = Role::create(['name'=>'admin']);    
       $rol22 = Role::create(['name'=>'support']);

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
       $rol18 = Role::create(['name'=>'studio-webcam']);
    //   $rol6 = Role::create(['name'=>'studio-model']);
       $rol19 = Role::create(['name'=>'independent-model']);
       $rol23 = Role::create(['name'=>'photographer']);
       $rol24 = Role::create(['name'=>'community manager']);
       $rol20 = Role::create(['name'=>'buyer']);
       $rol21 = Role::create(['name'=>'other']);

       Permission::create(['name' =>'root.dashboard'])->syncRoles([$rol1]);
       Permission::create(['name' =>'root.dashboard.users'])->syncRoles([$rol1]);
       Permission::create(['name' =>'root.dashboard.apps'])->syncRoles([$rol1]);    
       Permission::create(['name' =>'root.dashboard.roles'])->syncRoles([$rol1]);
       Permission::create(['name' =>'root.dashboard.config'])->syncRoles([$rol1]);

       Permission::create(['name' =>'admin.dashboard'])->syncRoles([$rol2],[$rol1]); 
       Permission::create(['name' =>'admin.users'])->syncRoles([$rol2],[$rol1]); 
       Permission::create(['name' =>'admin.roles'])->syncRoles([$rol2],[$rol1]); 
       Permission::create(['name' =>'admin.themes'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.verify-accounts'])->syncRoles([$rol2]);      
       Permission::create(['name' =>'admin.paymentbanks'])->syncRoles([$rol2]);      
       Permission::create(['name' =>'admin.payments'])->syncRoles([$rol2]);      
       Permission::create(['name' =>'admin.credits'])->syncRoles([$rol2]);      
       Permission::create(['name' =>'admin.stats'])->syncRoles([$rol2]);          
       Permission::create(['name' =>'admin.config'])->syncRoles([$rol2]);       
       Permission::create(['name' =>'admin.tasks'])->syncRoles([$rol1]); 
       Permission::create(['name' =>'admin.unbans'])->syncRoles([$rol1],[$rol2],[$rol22]); 
       Permission::create(['name' =>'admin.supports'])->syncRoles([$rol1],[$rol2],[$rol22]); 
       
       Permission::create(['name' =>'admin.cms'])->syncRoles([$rol2]);       
       Permission::create(['name' =>'admin.cms.pages'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.cms.blog'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.cms.tags'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.cms.categorys'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.cms.config-site'])->syncRoles([$rol2]);       

       Permission::create(['name' =>'admin.apps'])->syncRoles([$rol2]);       
       Permission::create(['name' =>'admin.app.awards'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.app.forum'])->syncRoles([$rol2]);
       Permission::create(['name' =>'admin.app.tools'])->syncRoles([$rol2]);
 
       /* permison hosts */        
       Permission::create(['name' =>'host.admin'])->syncRoles([$rol3], [$rol2]);       
       Permission::create(['name' =>'host.admin.api'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.profile'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.affiliates'])->syncRoles([$rol3], [$rol2]);
  
       
       Permission::create(['name' =>'host.admin.apps'])->syncRoles([$rol3], [$rol2]);              
       Permission::create(['name' =>'host.admin.apps.api'])->syncRoles([$rol3], [$rol2]);       
       Permission::create(['name' =>'host.admin.app.albums'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.albums.pics'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.albums.videos'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.albums.documents'])->syncRoles([$rol3], [$rol2]);       
       Permission::create(['name' =>'host.admin.app.links'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.traffic'])->syncRoles([$rol3], [$rol2]);   
       Permission::create(['name' =>'host.admin.app.notes'])->syncRoles([$rol3], [$rol2]);       
       Permission::create(['name' =>'host.admin.app.dm'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.favorite-cams'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.love-letters'])->syncRoles([$rol3], [$rol2]);    
       Permission::create(['name' =>'host.admin.app.whishlist'])->syncRoles([$rol3], [$rol2]);   
       Permission::create(['name' =>'host.admin.app.campaigns'])->syncRoles([$rol3], [$rol2]);
       

       Permission::create(['name' =>'host.admin.app.studios'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.servercams'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.hostone'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.faceXcam'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.onlyFans'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.lives'])->syncRoles([$rol3], [$rol2]);

       Permission::create(['name' =>'host.admin.app.socialmedia'])->syncRoles([$rol3], [$rol2]); 
       Permission::create(['name' =>'host.admin.app.socialmedia.phone'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.socialmedia.sms'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.socialmedia.whatapp'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.socialmedia.telegram'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.socialmedia.instagram'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.socialmedia.tiktok'])->syncRoles([$rol3], [$rol2]);

       Permission::create(['name' =>'host.admin.app.bots'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.bots.advertising-campaigns'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.bots.whatsapp'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.bots.telegram'])->syncRoles([$rol3], [$rol2]);
       
       Permission::create(['name' =>'host.admin.app.chaturbate'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.chaturbate.api'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.chaturbate.bios'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.chaturbate.affiliates'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.chaturbate.share'])->syncRoles([$rol3], [$rol2]);
       
       Permission::create(['name' =>'host.admin.app.awards'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.awards.tip-menu'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.awards.topics'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.awards.prizes'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.awards.ideas-show'])->syncRoles([$rol3], [$rol2]);    

       Permission::create(['name' =>'host.admin.app.crm'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.taks'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.teams'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.support'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.paymentsinvoice'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.calendar'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.contacs'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.typecontac'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.crm.dm'])->syncRoles([$rol3], [$rol2]);
    
       Permission::create(['name' =>'host.admin.app.tools'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.dolar-colombia'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.test'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.canva'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.redux-imagens'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.imgurl'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.dolar'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.cbhorus'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.traductor'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.bg-img-transparent'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.blog-chatur-es'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.blog-chatur-en'])->syncRoles([$rol3], [$rol2]);
       Permission::create(['name' =>'host.admin.app.tools.contracts'])->syncRoles([$rol3], [$rol2]);  
  
    }
}

