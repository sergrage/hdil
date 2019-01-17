<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

    {
    	$avatar = 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R';

    	$user = Auth::user();

    	$avatar = $user->image ? $user->image:$avatar;

        return view('cabinet.home', compact('user', 'avatar'));
    }
}
