<?php

namespace App\Http\Controllers\LTE;

use Illuminate\Http\Request;
use App\Card;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{

    public function index()
    {
        $cards = Card::orderBy('id', 'desc')->paginate(20);

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
    
    // public function edit($id)
    // {
    //     //
    // }


    // public function update(Request $request, $id)
    // {
    //     //
    // }


    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('admin.cards.index');
    }
}