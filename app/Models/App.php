<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apps';

    //protected $fillable = ['downloads', 'downloads_bot', 'name','slug','es', 'en','version','menu','url','target','icon','image','download_url','is_approved','install','apps_categors_id','meta_title','meta_description','meta_keywords','active']; // fillable2
    protected $fillable = ['name','slug','es','en','editorjs','version','menu','url','target','icon','image','download_url','is_approved','install','apps_categors_id','meta_title','meta_description','meta_keywords','active','downloads','downloads_bot']; // fillable2

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apps0authors()
    {
        return $this->hasMany('App\Models\Apps0author', 'app_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function apps_categors()
    {
        return $this->hasOne('App\Models\Apps0categor', 'id', 'apps_categors_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apps_installs()
    {
        return $this->hasMany('App\Models\Apps0install', 'app_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apps_tags()
    {
        return $this->hasMany('App\Models\Apps0tag', 'app_id', 'id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'apps0tags', 'app_id', 'tag_id');
    }
    
    // booted sin users [] 
}
