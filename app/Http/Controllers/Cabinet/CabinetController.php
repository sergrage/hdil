<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CabinetController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
        // $this->middleware('can:policy')->only('edit');
    }

    public function index()
    {
    	$user = Auth::user();

    	$parents = Category::defaultOrder()->withDepth()->get();
    	$category = Category::all();
        return view('cabinet.home', compact('user', 'category' ,'parents'));
    }
   
}
