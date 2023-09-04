<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themacom extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'themacoms';

    protected $fillable = ['name','pic','slug','codex','active','type']; // fillable2
	 
    // booted sin users [] 
}
