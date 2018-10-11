<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;

use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use Notifiable;
    use Sluggable;

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_BANNED = 'banned';

    public const ROLE_USER = 'user';
    public const ROLE_MODERATOR = 'moderator';
    public const ROLE_ADMIN = 'admin';


    protected $fillable = [
        'name', 'email', 'password', 'status', 'verify_token', 'role', 'image', 'slug', 'likesNumber', 'commentsNumber'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function cards()
        {
            return $this->hasMany(Card::class);
        }

    public function comments()
        {
            return $this->hasMany(Comment::class);
        }

    public function isWait(): bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isActive(): bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function isBanned(): bool
    {
        return $this->status === self::STATUS_BANNED;
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }
    
    public function isModerator(): bool
        {
            return $this->role === self::ROLE_MODERATOR;
        }

    public function isUser(): bool
    {
        return $this->role === self::ROLE_USER;
    }

    public function getImage()
    {
        if($this->image){
            return '/admin/img/user2-160x160.jpg';
        }
        return '/admin/img/user2-160x160.jpg';
    }

    public function carbonTest()
    {

        $now = Carbon::now();
        $date = Carbon::parse($this->created_at);

        // Если разница больше 24 часов и статус STATUS_WAIT, то true

        if($now->diffInHours($date) > 24 && $this->isWait()){
            return 'true';
        }
        return false;
    }

    


}
