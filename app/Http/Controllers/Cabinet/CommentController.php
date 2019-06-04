<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Comment\CardCommentRequest;

class CommentController extends Controller
{
    public function store(CardCommentRequest $request, $id)
    {
    	$card = Card::findOrFail($id);
    	$user = Auth::user();

        dd($request);

        $comment = new Comment([
            'commentable_id' => $request['card_id'],
            'commentable_type' => 'App\Models\Card',
            'commented_id' => $user->id,
            'commented_type' => 'App\Models\User',
            'comment' => $request['comment'],
            'approved' => 1,
            'rate' => null,
            'claim' => 0,
            'parent_id' => $request['parent_id'],
        ]);
    	
        $comment->save();

        // $comment = $request['comment'];

    	// $user->comment($card, $comment, $rate = 0);

    	$user->increment('commentsNumber');
    	$card->increment('commentsNumber');

    	return redirect()->route('cabinet.card.show', compact('card'));
    }
}
