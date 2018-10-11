<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Category;
use App\User;


class Card extends Model
{
     use Sluggable;
    

    protected $table = 'cards';

    protected $fillable = ['content', 'slug', 'category_id', 'user_id'];


    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'category_id' .'_' .  'id'
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
