<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;
use Cmgmyr\Messenger\Traits\Messagable;

use Overtrue\LaravelFollow\Traits\CanLike;

use Actuallymab\LaravelComment\CanComment;

use Illuminate\Support\Carbon;

use App\Models\Skill;
use App\Models\Challenge;
use App\Models\Card;

class User extends Authenticatable
{
    use Notifiable;
    use Sluggable;
    use Messagable;
    use CanLike;
    use CanComment;

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

    public $bootstrapColors = [
            'badge-primary',
            'badge-secondary',
            'badge-success',
            'badge-danger',
            'badge-warning',
            'badge-info',
            'badge-light',
            'badge-dark',
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

    // public function comments()
    //     {
    //         return $this->hasMany(Comment::class);
    //     }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function challenge()
    {
        return $this->hasMany(Challenge::class);
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

    public function policyAgree(): bool
    {
        return  $this->policy === 1;
    }

    public function getAvatar()
    {
        $avatar = 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R';
        $avatar = $this->image ? '/' . $this->image:$avatar;

        return $avatar;
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
