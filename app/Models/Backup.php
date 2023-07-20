<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'backups';

    protected $fillable = ['name','fileurl']; // fillable2
	 
    // booted sin users [] 
}
