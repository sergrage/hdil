<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Requests\Cabinet\CreateCardRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Card;

use App\UseCases\Card\CardService;

class CabinetController extends Controller
{

    private $service;

    public function __construct(CardService $service)
    {
    	$this->middleware('auth');
        // $this->middleware('can:policy')->only('edit');
        $this->service = $service;
    }

    public function index()
    {
    	$user = Auth::user();

    	$parents = Category::defaultOrder()->withDepth()->get();
    	$category = Category::all();
        $cards = $user->cards;

        $currentPath= Route::getFacadeRoot()->current()->uri();

        return view('cabinet.home', compact('user', 'category' ,'parents', 'currentPath', 'cards'));
    }

    public function image()
    {
        dd(123);
    }

    public function store(CreateCardRequest $request)
    {   
        $user = Auth::user();

        $this->service->createCard($user, $request);

        return redirect()->route('cabinet.home');
    }
   
}
