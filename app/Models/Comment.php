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
}