<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'title', 'text'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
