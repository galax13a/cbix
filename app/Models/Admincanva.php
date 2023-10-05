<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admincanva extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'admincanvas';

    protected $fillable = ['name']; // fillable2
	 
    // booted sin users [] 
}
