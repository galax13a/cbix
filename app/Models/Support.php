<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'supports';

    protected $fillable = ['name','type_support','sent_by','support_id','message','reply_message','status','priority']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reply0supports()
    {
        return $this->hasMany('App\Models\Reply0support', 'support_id', 'id');
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
    public function user_support()
    {
        return $this->hasOne('App\Models\User', 'id', 'support_id');
    }
     
    // booted sin users [] 
}
