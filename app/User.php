<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;

use Illuminate\Support\Carbon;

use App\Skill;

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
        'name', 'email', 'password', 'status',
        'verify_token', 'role', 'image', 'slug',
        'likesNumber', 'commentsNumber', 'bio',
        'firstname', 'lastname', 'facebook',
        'twitter', 'linkedin', 'instagram',
        'policy'
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
            return $this->hasMany(App\Card::class);
        }

    public function comments()
        {
            return $this->hasMany(App\Comment::class);
        }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
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

    public function getUserSkillsId($request)
    {
        // тут создаем массив индексов СКИЛОВ и добавляем скилы в таблицу БД
        $skills_id = [];
        foreach($request->input('skills') as $key => $value){
            
            // подготовка value
            $value = trim(mb_strtolower($value));

            // проверяем, есть ли такой skill в БД
            $oldSkill = Skill::where('skill', $value)->first(); 

            if(!$oldSkill){
                $newSkill = Skill::create([
                    'skill' => $value,
                ]);
                $skills_id[] = $newSkill->id;  
            } else {
                $skills_id[] = $oldSkill->id;
            }
        }

        return $skills_id;
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
