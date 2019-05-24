<?php

namespace App\Http\Controllers\FillProfile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\FillProfileRequest;
use App\Http\Requests\Users\EditProfileRequest;

use App\UseCases\Profile\ProfileService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FillProfileController extends Controller
{

    private $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
    	$user = Auth::user();
    	return view('fillprofile.fillprofile', compact('user'));
    }

    public function store(FillProfileRequest $request)
    {

    $user = Auth::user();

    $this->service->fillUser($user, $request);

    return redirect()->route('cabinet.home');

    }

    public function edit()
    {
        // dd($user->id);
       $user = Auth::user();
       // if($user->id !== Auth::id()){
       //  abort(403);
       // }

        $skillsList = $user->skills;
        // если у user есть skills, то получаем array из его id   $user->skills - это коллекция
        if($user->skills->isNotEmpty()){
            $skillsListId = $user->skills->pluck('id')->toArray();
        }
        return view('fillprofile.editProfile', compact('user','skillsList'));
    }


    public function update(EditProfileRequest $request)
    {
        $user = Auth::user();

        $this->service->updateUser($user, $request);

        return redirect()->route('cabinet.home');
    }

}
