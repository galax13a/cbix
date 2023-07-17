<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteconfig extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'siteconfigs';

    protected $fillable = ['name','idioma','crm','apps','thumbnail','localimg','s3amazon','s3google','siteupkeep','code_google_anality','code_head_front','code_head_back','code_body_front']; // fillable2
	 
    // booted sin users [] 
}
