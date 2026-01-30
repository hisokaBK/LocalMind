<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'location',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function responses() {
        return $this->hasMany(Response::class);
    }

    public function likes() {
        return $this->hasMany(Like::class);
    }

    public function favorates()
    {
        return $this->hasMany(Favorate::class);
    }
}
