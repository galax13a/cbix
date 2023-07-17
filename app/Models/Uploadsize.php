<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadsize extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'uploadsizes';

    protected $fillable = ['name','width','active']; // fillable2
	 
    // booted sin users [] 
}
