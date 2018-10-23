<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

	public $table = 'skills';

	public $fillable = ['skill'];

    public function users()
    {
        return $this->belongsToMany(App\User::class);
    }
}
