<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditsGoal extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'credits0goals';

    protected $fillable = ['goal','credits_reward']; // fillable2
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditsUserGoals()
    {
        return $this->hasMany('App\Models\CreditsUserGoal', 'goal_id', 'id');
    }
     
    // booted sin users [] 
}
