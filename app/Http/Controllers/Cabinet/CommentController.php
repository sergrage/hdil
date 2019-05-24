<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Comment\CardCommentRequest;

class CommentController extends Controller
{
    public function store(CardCommentRequest $request, $id)
    {
    	$card = Card::findOrFail($id);
    	$user = Auth::user();
    	$comment = $request['comment'];

    	$user->comment($card, $comment, $rate = 0);

    	$user->increment('commentsNumber');
    	$card->increment('commentsNumber');

    	return redirect()->route('cabinet.card.show', compact('card'));
    }
}
