<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unban_admin extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'unbans';

    protected $fillable = ['sent_by','resolved_by','comment','reply_comment','email','status']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_resolved_by()
    {
        return $this->hasOne('App\Models\User', 'id', 'resolved_by');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_sent_by()
    {
        return $this->hasOne('App\Models\User', 'id', 'sent_by');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id');
    }
     
       protected static function booted() {
            static::creating(function ($model) {
                if (auth()->check()) {
                    $model->user_id = auth()->id();
                }
            });
        } 
}
