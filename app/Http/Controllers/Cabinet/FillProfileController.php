<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Skill;
use Validator;
use App\User;

use App\Http\Requests\Users\FillProfileRequest;


class FillprofileController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = Auth::user();

    	// if($user->policy = 1) {
    	// 	return redirect()->route('home');
    	// }

    	return view('cabinet.fillProfile', compact('user'));
    }


    public function store(FillProfileRequest $request, User $user)
    {
    	dd($request);

    	$user->update([
    		'firstname' => $request['firstname'],
    		'lastname' => $request['lastname'],
    		'policy' => 1,
    		'image' => 'hello'
    	]);

    	return redirect()->route('cabinet', $user);

    }

    public function edit()
    {
    	$user = Auth::user();
    	return view('cabinet.editprofile', compact('user'));
    }


    public function update(User $user)
    {
    	# code...
    }

    public function destroy()
    {
    	# code...
    	// TODO
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
