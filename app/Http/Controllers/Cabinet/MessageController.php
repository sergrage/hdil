<?php

namespace App\Http\Controllers\Cabinet;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        // тут надо будет поменят фотку.
        $avatar = 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R';
        $avatar = $user->image ? '/' . $user->image:$avatar;
        $skillsList = $user->skills;
        // если у user есть skills, то получаем array из его id   $user->skills - это коллекция


        return view('cabinet.message', compact('user', 'avatar'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Message $message)
    {
        //
    }


    public function edit(Message $message)
    {
        //
    }


    public function update(Request $request, Message $message)
    {
        //
    }


    public function destroy(Message $message)
    {
        //
    }
}
