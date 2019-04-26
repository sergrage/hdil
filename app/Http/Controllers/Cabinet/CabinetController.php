<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

        $currentPath= Route::getFacadeRoot()->current()->uri();

        return view('cabinet.home', compact('user', 'category' ,'parents', 'currentPath'));
    }

    public function image()
    {
        dd(123);
    }
   
}
