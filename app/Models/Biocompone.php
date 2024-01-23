<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biocompone extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'biocompones';

    protected $fillable = ['name','img','code','js','biocategorcompone_id','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function biocategorcompone()
    {
        return $this->hasOne('App\Models\Biocategorcompone', 'id', 'biocategorcompone_id');
    }
     
    // booted sin users [] 
}
