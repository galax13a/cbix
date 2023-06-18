<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'tasks';

    protected $fillable = ['name','command','interval','last_executed_at','status']; // fillable2
	 
    // booted sin users [] 
}
