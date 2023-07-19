<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadthumbnail extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'uploadthumbnails';

    protected $fillable = ['name','width','height','active']; // fillable2
	 
    // booted sin users [] 
}
