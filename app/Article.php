<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','published', 'view', 'file', 'pages', 'type','link','author',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
