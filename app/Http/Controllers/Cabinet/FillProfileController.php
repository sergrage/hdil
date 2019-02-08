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

    public function index(Request $request)
    {
    	$user = Auth::user();

    	// if($user->policy = 1) {
    	// 	return redirect()->route('home');
    	// }
        

    	return view('cabinet.fillProfile', compact('user'));
    }


    public function store(FillProfileRequest $request, User $user)
    {
    // юзера пришлось выбирать так, т.к. просто $user был пустой
        $user = Auth::user();
        // если был введен хоть один skill
        if($request->input('skills')[0]) {
            // тут создаем массив индексов СКИЛОВ и добавляем скилы в таблицу БД
            $skills_id = [];
            foreach($request->input('skills') as $key => $value){
                
                // подготовка value
                $value = trim(mb_strtolower($value));

                // проверяем, есть ли такой skill в БД
                $oldSkill = Skill::where('skill', $value)->first(); 

                if(!$oldSkill){
                    $newSkill = Skill::create([
                        'skill' => $value,
                    ]);
                    $skills_id[] = $newSkill->id;  
                } else {
                    $skills_id[] = $oldSkill->id;
                }
            }
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
