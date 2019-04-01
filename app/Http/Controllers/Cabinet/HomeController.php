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

        $bootstrapColors = [
            'badge-primary',
            'badge-secondary',
            'badge-success',
            'badge-danger',
            'badge-warning',
            'badge-info',
            'badge-light',
            'badge-dark',
        ];

    	$user = Auth::user();
        return view('cabinet.home', compact('user', 'bootstrapColors'));
    }
}
