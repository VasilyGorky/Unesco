<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'author','name','city', 'year', 'image', 'file'
    ];
}
