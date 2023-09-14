<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thema extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'themas';

    protected $fillable = ['name','pic','slug_en','slug_es','htmlen','htmles','css','js','active','type']; // fillable2
	 
    // booted sin users [] 
}
