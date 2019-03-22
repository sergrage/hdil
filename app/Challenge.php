<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = [
        'name', 'status', 'email',
    ];

    protected $hidden = [
      'remember_token',
    ];


// Заявка на Challenge открыта
    public function isOpen() : bool
    {
    	return $this->status === true;
    }
// Заявка на Challenge закрыта
    public function isClose() : bool
    {
    	return $this->status === false;
    }












}
