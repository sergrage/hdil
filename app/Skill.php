<?php

namespace App;

use Illuminate\Support\Arr;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Skill extends Model
{

	public $table = 'skills';

	public $fillable = ['skill'];

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

	public function randomBootstrapBadgeColor()
	{
		return Arr::random($this->bootstrapColors);
	}

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
