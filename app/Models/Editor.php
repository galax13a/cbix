<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'themas';

    protected $fillable = ['name','pic','slug','htmlen','htmles','type']; // fillable2
	 
    // booted sin users [] 
}
