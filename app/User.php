<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'firstname',
        'secondname',
        'email',
        'password',
        'gender',
        'verified',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function item()
    {
        return $this->hasMany(Item::class);
    }

    /**
     * Метод возвращает true, если пользователь администратор, в противном случае false
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role=='Администратор';
    }
    public function isWorker()
    {
        return $this->role=='Работник';
    }
    public function isVerified()
    {
        return $this->verified=="1";
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->remember_token = str_random(30);
        });
    }

    /**
     * Метод устанавливает поля verified и remember_token модели User и сохраняет изменения
     */
    public function confirmEmail()
    {
        $this->verified = 1;
        $this->remember_token = null;
        $this->save();
    }

}
