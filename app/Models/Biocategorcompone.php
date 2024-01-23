<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biocategorcompone extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'biocategorcompones';

    protected $fillable = ['name','active','icon']; // fillable2
	 
    // booted sin users [] 
}
