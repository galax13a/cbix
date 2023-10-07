<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Estudio extends VerifyRecordOwnership
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'estudios';

    protected $fillable = ['user_id', 'name', 'city', 'dir']; // fillable2

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            if (auth()->check()) {
                $model->user_id = auth()->id();
            }
        });
    }
    public function getModelosCountAttribute() 
    {
        Log::info('The getModelosCountAttribute accessor was called.');

        return DB::table('estudiomodelos')
            ->where('estudio_id', $this->id)
            ->where('user_id', auth()->id())
            ->count();
    }
    public function modelos()
    {
        return $this->belongsToMany(Modelo::class, 'estudiomodelos');
    }

    public function estudios()
    {
        return $this->belongsToMany(Estudio::class, 'estudiomodelos');
    }
}
