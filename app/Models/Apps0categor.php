<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apps0categor extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apps0categors';

    protected $fillable = ['name','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apps()
    {
        return $this->hasMany('App\Models\App', 'apps_categors_id', 'id');
    }
     
    // booted sin users [] 
}
