<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;

class CardController extends Controller
{
    public function edit(Card $card)
    {
    	$user - Auth::user();
    	return redirect()->route('cabinet.card.edit', 'card');
    }

    public function update(Card $card)
    {
    	return redirect()->route('cabinet.home');
    }

    public function destroy(Card $card)
    {
    	$card->delete();
        return redirect()->route('cabinet.home');
    }
}
