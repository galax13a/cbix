<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apps0tag extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apps0tags';

    protected $fillable = ['app_id','tag_id']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function app()
    {
        return $this->hasOne('App\Models\App', 'id', 'app_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tag()
    {
        return $this->hasOne('App\Models\Tag', 'id', 'tag_id');
    }
     
    // booted sin users [] 
}
