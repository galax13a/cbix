<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'tags';

    protected $fillable = ['name']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apps0tags()
    {
        return $this->hasMany('App\Models\Apps0tag', 'tag_id', 'id');
    }

    public function apps()
    {
        return $this->belongsToMany(App::class, 'apps0tags', 'tag_id', 'app_id');
    }
     
    // booted sin users [] 
}
