<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id','title','published', 'view', 'file', 'pages', 'type',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
