<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apps';

    protected $fillable = ['name','description','is_approved','apps_categors_id','meta_title','meta_description','meta_keywords','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function appsCategor()
    {
        return $this->hasOne('App\Models\Apps0categor', 'id', 'apps_categors_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appAuthors()
    {
        return $this->hasMany('App\Models\AppAuthor', 'app_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appInstalls()
    {
        return $this->hasMany('App\Models\AppInstall', 'app_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appTags()
    {
        return $this->hasMany('App\Models\AppTag', 'app_id', 'id');
    }
     
    // booted sin users [] 
}
