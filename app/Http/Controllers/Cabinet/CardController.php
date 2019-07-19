<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;
use App\Models\Category;
use App\Models\Comment;

use App\UseCases\Card\CardService;
use App\Http\Requests\Card\EditCardRequest;

class CardController extends Controller
{
    private $service;

    public function __construct(CardService $service)
    {
        $this->middleware('auth');
        // $this->middleware('can:policy')->only('edit');
        $this->service = $service;
    }

    public function edit(Card $card)
    {
    	$user = Auth::user();
        $parents = Category::defaultOrder()->withDepth()->get();
        $category = Category::all();
    	return view('cabinet.cardEdit', compact( 'card', 'category' ,'parents', 'user'));
    }

    public function show(Card $card)
    {
       $user = Auth::user();
       // $card = $card->with('comments')->get();

       $card->increment('views');
       $comments = $card->comments;

       $comments = Comment::buildTree($comments, 0);

       return view('cabinet.cardShow', compact( 'card', 'user', 'comments'));
    }

    public function update(Card $card, EditCardRequest $request)
    {
        $this->service->editCard($card, $request);
    	return redirect()->route('cabinet.home');
    }

    public function destroy(Card $card)
    {
    	$card->delete();
        return redirect()->route('cabinet.home');
    }

    public function addLike(Card $card)
    {   
        $likesNumber = $card->likesNumber;

        $card->update([
            'likesNumber' => $likesNumber + 1,
        ]);
        return redirect()->route('cabinet.home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequest(Request $request)
    {
        $card = Card::find($request->id);
        $response = auth()->user()->toggleLike($card);
        return response()->json(['success'=>$response]);
    }
}
