<?php

namespace App\UseCases\Profile;

use App\Models\User;
use App\Http\Requests\Users\FillProfileRequest;
use App\Http\Requests\Users\EditProfileRequest;


class ProfileService
{
    public function fillUser(User $user, FillProfileRequest $request)
    {
        // если был введен хоть один skill
        if($request->input('skills')[0]) {
            $skills_id = $user->getUserSkillsId($request);
            // отношение многие-к-многим, заполняем таблицу skill_user
            // заполняются только уникальные элементы. повторы удаляются
            $user->skills()->attach(array_unique($skills_id));
        }

        // апдейтим юзера
        $user->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'bio' => $request['bio']??'',
            'facebook' => $request['facebook']??'',
            'twitter' => $request['twitter']??'',
            'instagram' => $request['instagram']??'',
            'linkedin' => $request['linkedin']??'',
            'policy' => 1,
        ]);
    }

    public function updateUser(User $user, EditProfileRequest $request)
    {

        if($request->input('skills')[0]) {
            $skills_id = $user->getUserSkillsId($request);
        }

        $user->skills()->sync(array_unique($skills_id));

        $user->update([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'bio' => $request['bio']??'',
            'facebook' => $request['facebook']??'',
            'twitter' => $request['twitter']??'',
            'instagram' => $request['instagram']??'',
            'linkedin' => $request['linkedin']??'',
        ]);
    }
}