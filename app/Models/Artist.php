<?php

namespace App\Models;

class Artist extends User
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'items',
        'user_id',
        'artist_name',
        'comments',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
