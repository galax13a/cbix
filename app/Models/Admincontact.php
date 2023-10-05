<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admincontact extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'admincontacts';

    protected $fillable = ['name','nick_name','email','birthday','phone_code','whatsapp','skype','telegram','tiktok','facebook','snapchat','x','discord','other','admincontacttag_id']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function admincontacttag()
    {
        return $this->hasOne('App\Models\Admincontacttag', 'id', 'admincontacttag_id');
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
