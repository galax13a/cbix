<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminapp extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'apps';

    protected $fillable = ['name', 'en','is_approved', 'active','target','url', 'icon', 'image', 'download_url']; // fillable2
	 
    // booted sin users [] 
}
