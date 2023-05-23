<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagemaster extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'pagemasters';

    protected $fillable = ['name','url','afiliate','logo','api','api2','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apichaturs()
    {
        return $this->hasMany('App\Models\Apichatur', 'pagemaster_id', 'id');
    }
     
    // booted sin users [] 
}
