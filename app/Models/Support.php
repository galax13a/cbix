<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'supports';

    protected $fillable = ['name','description','status']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replySupports()
    {
        return $this->hasMany('App\Models\ReplySupport', 'support_id', 'id');
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
