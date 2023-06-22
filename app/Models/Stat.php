<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'stats';

    protected $fillable = ['name','codex','location','url']; // fillable2
	 
    // booted sin users [] 
}
