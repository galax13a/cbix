<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadimage extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'uploadimages';

    protected $fillable = ['user_id','uploadfolder_id','name','size','url','extension']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uploadfolder()
    {
        return $this->hasOne('App\Models\Uploadfolder', 'id', 'uploadfolder_id');
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
