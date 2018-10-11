<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)

    {
    	// $users = DB::table('users')->
    	// 		//where('status', '=', 'wait')->
    	// 		where($user->carbonTest(), '=', 'true')->
    	// 		get(); 
    	//dd(Carbon::today()->toDateString());
    	$users = DB::table('users')->whereDate('created_at',  '<', Carbon::today()->toDateString())->get();
		// $count = $records->count();
		// foreach ($records as $record) {
		//  $record->delete();
		// }

		// if ($count > 0) {
		//   $this->info("Удалено {$count} записей.");
		// }

        return view('home', compact('users'));
    }

}
