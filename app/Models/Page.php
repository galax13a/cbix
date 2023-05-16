<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'pages';

    protected $fillable = ['user_id','name','url','active'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    protected static function booted()
    {
        static::creating(function ($page) {
            $page->user_id = auth()->id();
        });
    }
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
