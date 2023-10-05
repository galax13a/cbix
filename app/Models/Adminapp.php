<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminapp extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'adminapps';

    protected $fillable = ['name']; // fillable2
	 
    // booted sin users [] 
}
