<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categor extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categors';

    protected $fillable = ['name','active']; // fillable2
	 
    // booted sin users [] 
}
