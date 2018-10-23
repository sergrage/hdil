<?php

namespace App\Http\Controllers\Cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skill;
use Validator;


class FillprofileController extends Controller
{
    public function index()
    {
    	return view('cabinet.fillProfile');
    }

    public function addMoreSkillsPost(Request $request)
    {
    	$rules = [];


        foreach($request->input('skill') as $key => $value) {
            $rules["skill.{$key}"] = 'required';
        }


        $validator = Validator::make($request->all(), $rules);


        if ($validator->passes()) {


            foreach($request->input('skill') as $key => $value) {
                TagList::create(['skill'=>$value]);
            }


            return response()->json(['success'=>'done']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }
}
