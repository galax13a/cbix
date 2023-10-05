<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admincontacttag extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'admincontacttags';

    protected $fillable = ['name','active']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admincontacts()
    {
        return $this->hasMany('App\Models\Admincontact', 'admincontacttag_id', 'id');
    }
     
    // booted sin users [] 
}
