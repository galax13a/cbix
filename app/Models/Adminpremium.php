<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminpremium extends VerifyRecordOwnership
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'adminpremiums';

    protected $fillable = ['name','content','plan','subcription','time','bots','linkpay','active', 'value']; // fillable2
	
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
