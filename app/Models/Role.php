<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'roles';

    protected $fillable = ['name','guard_name']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelHasRole()
    {
        return $this->hasOne('App\Models\ModelHasRole', 'role_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleHasPermissions()
    {
        return $this->hasMany('App\Models\RoleHasPermission', 'role_id', 'id');
    }
     
    // booted sin users [] 
}
