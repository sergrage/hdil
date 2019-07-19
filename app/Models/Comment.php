<?php

namespace App\Models;

use App\Models\User;
use Actuallymab\LaravelComment\Models\Comment as LaravelComment;

class Comment extends LaravelComment
{
	public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    
    public function getUserName()
    {
    	return User::findOrFail($this->commented_id)->name;
    }

    public function getUserId()
    {
    	return User::findOrFail($this->commented_id)->id;
    }

    public function createdForHumans()
    {
    	return $this->created_at->diffForHumans();
    }

    // Сама функция рекурсии
    public static function buildTree($arr, $pid = 0) {
        // Находим всех детей раздела
        $found = $arr->filter(function($item) use ($pid){return $item->parent_id == $pid; });

        // Каждому детю запускаем поиск его детей
        foreach ($found as $key => $cat) {
            $sub = self::buildTree($arr, $cat->id);
            $cat->sub = $sub;
            }

        return $found;
    }
}