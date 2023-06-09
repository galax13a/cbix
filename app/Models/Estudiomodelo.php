<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiomodelo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'estudiomodelos';

    protected $fillable = ['estudio_id','modelo_id']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudio()
    {
        return $this->belongsTo(Estudio::class, 'estudio_id');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
     
       protected static function booted() {
            static::creating(function ($model) {
                if (auth()->check()) {
                    $model->user_id = auth()->id();
                }
            });
        } 
}
