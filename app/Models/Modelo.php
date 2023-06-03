<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends VerifyRecordOwnership
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'modelos';

    protected $fillable = ['user_id','name','nick','nick2','email','dni','wsp','porce','typemodelo_id','img','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typemodelo()
    {
        return $this->hasOne('App\Models\Typemodelo', 'id', 'typemodelo_id');
    }

    public function estudios()
    {
        return $this->belongsToMany(Estudio::class, 'estudiomodelos', 'modelo_id', 'estudio_id');
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
