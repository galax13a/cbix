<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

use Cog\Contracts\Ban\Bannable as BannableInterface;
use Cog\Laravel\Ban\Traits\Bannable;

/*bans users*/



class User extends Authenticatable implements BannableInterface
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    use Bannable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'premium',
        'profiles',
        'subscription_end',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function uploadPlan()
    {
        return $this->belongsTo('App\Models\UploadPlan');
    }

    // En User.php

    public function biousers()
    {
        return $this->hasMany(Biouser::class);
    }
}
