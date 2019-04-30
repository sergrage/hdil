<?php

namespace App\UseCases\Card;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Card;
use App\Http\Requests\Cabinet\CreateCardRequest;

class CardService extends Model
{
    public function createCard(User $user, CreateCardRequest $request)
    {
    	$user_id = $user->id;

    	$card = new Card([
            'content' => $request['content'],
            'likesNumber' => 0,
            'commentsNumber' => 0,
            'views' => 0,
            'user_id' => $user_id,
            'category_id' => $request['category_id'],
            'name' => $request['name'],
        ]);

        $card->save();
    }
}
