<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeditor extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'appeditors';

    protected $fillable = ['name','slug','es','en','editorjs','version','menu','url','target','icon','image','download_url','is_approved','install','apps_categors_id','meta_title','meta_description','meta_keywords','active','downloads','downloads_bot']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function apps0categor()
    {
        return $this->hasOne('App\Models\Apps0categor', 'id', 'apps_categors_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'apps0tags', 'app_id', 'tag_id');
    }
    // booted sin users [] 
}
