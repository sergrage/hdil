<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Skill;
use App\User;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\Users\FillProfileRequest;
use App\Http\Requests\Users\EditProfileRequest;


class UserController extends Controller
{

    public function index()
    {
    	$user = Auth::user();

    	// if($user->policy = 1) {
    	// 	return redirect()->route('home');
    	// }
        // сделать поверку гейтом ил миддлвером

    	return view('cabinet.fillprofile', compact('user'));
    }


    public function store(FillProfileRequest $request)
    {
    // юзера пришлось выбирать так, т.к. просто $user был пустой
    $user = Auth::user();

    // если был введен хоть один skill
        if($request->input('skills')[0]) {
            $skills_id = $user->getUserSkillsId($request);
        }

    // апдейтим юзера
    	$user->update([
    		'firstname' => $request['firstname']??'',
            'lastname' => $request['lastname']??'',
    		'bio' => $request['bio']??'',
            'facebook' => $request['facebook']??'',
            'twitter' => $request['twitter']??'',
            'instagram' => $request['instagram']??'',
            'linkedin' => $request['linkedin']??'',
    		'policy' => 1,
    	]);
    // отношение многие-к-многим, заполняем таблицу skill_user
        $user->skills()->attach(array_unique($skills_id));

    	return redirect()->route('cabinet.home', $user);

    }

    public function show(User $user)
    {
        return view('cabinet.showUser', compact('user'));
    }

    public function edit(User $user)
    {
       if($user->id !== Auth::user()->id){
        abort(403);
       }
        $skillsList = $user->skills;
        // если у user есть skills, то получаем array из его id   $user->skills - это коллекция
        if($user->skills->isNotEmpty()){
            $skillsListId = $user->skills->pluck('id')->toArray();
        }
    	return view('cabinet.editUser', compact('user','skillsList'));
    }


    public function update(EditProfileRequest $request, User $user)
    {
        // $skills_id = $user->skills->pluck('id')->toArray();
        if($request->input('skills')[0]) {
            $skills_id = $user->getUserSkillsId($request);
        }

        $user->skills()->sync(array_unique($skills_id));

    	$user->update([
            'firstname' => $request['firstname']??'',
            'lastname' => $request['lastname']??'',
            'bio' => $request['bio']??'',
            'facebook' => $request['facebook']??'',
            'twitter' => $request['twitter']??'',
            'instagram' => $request['instagram']??'',
            'linkedin' => $request['linkedin']??'',
        ]);

        return redirect()->route('cabinet.home', $user);
    }

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
