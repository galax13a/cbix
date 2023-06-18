<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'gifts';

    protected $fillable = ['name','description','cost','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gifts0replays()
    {
        return $this->hasMany('App\Models\Gifts0replay', 'gift_id', 'id');
    }
     
    // booted sin users [] 
}
