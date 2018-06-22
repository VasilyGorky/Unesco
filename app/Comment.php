<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Comment
 */
class Comment extends Model
{

    protected $fillable = [
        'id', 'firstname', 'email', 'text', 'parent_id', 'user_id', 'gender'
    ];

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * Связь с моделью Item
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
{
    return $this->belongsTo(Item::class);
}

    public function forum()
    {
        return $this->belongsTo(Item::class);
    }

    /**
     * Связь с моделью User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}