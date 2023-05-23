<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typemodelo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'typemodelos';

    protected $fillable = ['name','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany('App\Models\Modelo', 'typemodelo_id', 'id');
    }
     
    // booted sin users [] 
}
