<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Mail\Mailer;
use App\Mail\ChallengeMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\Challenge;
use App\Models\User;

class ChallengeController extends Controller
{
	public function __construct(Mailer $mailer)
    {
        $this->middleware('auth');
        $this->mailer = $mailer;
    }

    public function store(Request $request, User $user)
    {
    	$user = Auth::user();

    	$request->validate([
    		'email' =>  'required|email|string|max:255|',
    		'skill' => 'required|string|max:20|min:2'
    	]);

    	$challenge = Challenge::create([
            'skill' => $request['skill'],
            'user_id' => $user->id,
            'email' => $request['email'],
            'status' => 'open',
            'verify_token' => Str::random(),
        ]);

    	$this->mailer->to($challenge->email)->send(new ChallengeMail($challenge));

    	return redirect()->back()
                ->with('success', 'Check your email and click on the link to verify.');

    	if($request['whereToSend'] == 'toCommunity'){
    		dd($request);
    	}
    }
}
