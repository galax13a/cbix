<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apichatur extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apichaturs';

    protected $fillable = ['name','api','active','page_id']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function page()
    {
        return $this->hasOne('App\Models\Page', 'id', 'page_id');
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
                $model->user_id = auth()->id();
            });
        } 
}
