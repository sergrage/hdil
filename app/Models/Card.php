<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Overtrue\LaravelFollow\Traits\CanBeLiked;
use App\Models\Category;
use App\Models\User;


class Card extends Model
{
     use Sluggable;
     use CanBeLiked;
    

    protected $table = 'cards';

    protected $fillable = ['name', 'content', 'likesNumber', 'commentsNumber', 'views', 'category_id', 'user_id'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);	
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getCategoryName()
    {
        return $this->category->name;
    }

    public function getUserName()
    {
        return $this->user->name;
    }

    public function contentStrLimit()
    {
        return str_limit($this->content, 60);
    }
}
