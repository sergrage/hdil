<?php

namespace App\Http\Controllers\LTE;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;
use App\Http\Controllers\Controller;

class CardController extends Controller
{

    public function index()
    {
        $cards = Card::orderBy('id', 'desc')->with('category', 'user')->paginate(20);

        return view('admin.cards.index', compact('cards'));
    }


    // public function create()
    // {
    //     //
    // }


    // public function store(Request $request)
    // {
    //     //
    // }


    public function show(Card $card)
    {
        return view('admin.cards.show', compact('card'));

    }

    public function showUser($id)
    {
        $card = Card::find($id);

        $user = User::findOrFail($card->getUserId());

        return view('admin.cards.user', compact('user', 'card'));

    }
    
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('admin.cards.index');
    }
}
