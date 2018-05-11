<?php

namespace App\Http\Controllers\LTE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(100);
        return view('lte.users.index', compact('users'));
    }


    public function create()
    {
        return view('lte.users.create', compact('users'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required|string|max:255',
            'email' =>  'required|email|string|max:255|unique:users',
        ]);

        $user = User::create([
            'name'  =>  $request['name'],
            'email' =>  $request['email'],
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_USER,
        ]);

        return redirect()->route('admin.users.show', $user);

    }

    public function show(User $user)
    {
        return view('lte.users.show', compact('user'));
    }


    public function edit(User $user)
    {
        $statuses = [
            User::STATUS_WAIT => 'wait',
            User::STATUS_ACTIVE => 'active',
        ];

        return view('lte.users.edit', compact('user', 'statuses'));
    }


    public function update(Request $request, User $user)
    {
         $user->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email|unique:users',
            'image'    =>  'nullable|image',
            'status' => ['required', 'string', Rule::in([User::STATUS_ACTIVE, User::STATUS_WAIT])],
            'role' => ['required', 'string', Rule::in([User::ROLE_ADMIN, User::ROLE_USER])],
        ]);

        $user->update($request->only(['name', 'email', 'status', 'role', 'image']));

        return redirect()->route('admin.users.show', $user);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('lte.users.index');
    }

    public function unBan(User $user)
    {   
        $user->update(['status' => $user::STATUS_ACTIVE]);
        return redirect()->route('lte.users.index');
    }
}
