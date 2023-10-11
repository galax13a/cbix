<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminsetting extends VerifyRecordOwnership
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'adminsettings';

    protected $fillable = ['name','pic','preferred_language','country','phone_number','bots','pagemaster_id','role_id','yoursex']; // fillable2
	
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
    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'role_id');
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
