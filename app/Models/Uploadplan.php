<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadplan extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'uploadplans';

    protected $fillable = ['name','megas','price_any','price_mes','des_es','des_en','plan_filex','plan','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User', 'uploadplan_id', 'id');
    }
     
    // booted sin users [] 
}
