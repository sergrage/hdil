<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Kalnoy\Nestedset\NodeTrait;
use App\Card;

class Category extends Model
{
    //use Sluggable;
	use NodeTrait;
    

    protected $table = 'categories';

    public $timestamps = false;

    protected $fillable = ['name', 'slug', 'parent_id'];

    public function cards()
    {
        return $this->hasMany(Card::class);
    }


    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }
}
