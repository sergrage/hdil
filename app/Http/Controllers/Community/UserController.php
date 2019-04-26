<?php

namespace App\Http\Controllers\Community;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Skill;

use App\Models\User;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Users\FillProfileRequest;
use App\Http\Requests\Users\EditProfileRequest;


class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:policy')->only('edit');
    }

    public function index()
    {
        $user = Auth::user();
        $users = User::orderBy('id', 'desc')->with('skills')->get();
        return view('community.community', compact('users', 'user'));
    }


    public function store()
    {

    }

    public function show(User $user)
    {
        return view('cabinet.showUser', compact('user'));
    }

    // public function edit(User $user)
    //{
    // }


    // public function update(EditProfileRequest $request, User $user)
    // {
    // }

    public function destroy()
    {
    	# code...
    	// TODO
    }

    public function carbonTest()
    {
        dd(Carbon::now());
        $users =  DB::table('users')
        ->where('created_at' - Carbon::now(), '>', 24);
        dd($users);
    }



    // public function addMoreSkillsPost(Request $request)
    // {
    // 	$rules = [];


    //     foreach($request->input('skill') as $key => $value) {
    //         $rules["skill.{$key}"] = 'required';
    //     }


    //     $validator = Validator::make($request->all(), $rules);


    //     if ($validator->passes()) {


    //         foreach($request->input('skill') as $key => $value) {
    //             TagList::create(['skill'=>$value]);
    //         }


    //         return response()->json(['success'=>'done']);
    //     }


    //     return response()->json(['error'=>$validator->errors()->all()]);
    // }
}
