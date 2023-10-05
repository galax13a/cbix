<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminguest extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'adminguests';

    protected $fillable = ['name']; // fillable2
	 
    // booted sin users [] 
}
