<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Componente extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'componentes';

    protected $fillable = ['name','pic','htmlcode','css','js']; // fillable2
	 
    // booted sin users [] 
}
