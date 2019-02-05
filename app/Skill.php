<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Skill extends Model
{

	public $table = 'skills';

	public $fillable = ['skill'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
