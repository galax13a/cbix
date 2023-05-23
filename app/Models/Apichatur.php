<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apichatur extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apichaturs';

    protected $fillable = ['user_id','name','api','active','pagemaster_id']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pagemaster()
    {
        return $this->hasOne('App\Models\Pagemaster', 'id', 'pagemaster_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
     
       protected static function booted() {
            static::creating(function ($model) {
                if (auth()->check()) {
                    $model->user_id = auth()->id();
                }
            });
        } 
}
