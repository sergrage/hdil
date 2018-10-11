<?php

namespace App\Http\Controllers\LTE;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Http\Requests\Users\UpdateRequest;
use App\Http\Requests\Users\CreateRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateRequest $request)
    {
        $user = User::create([
            'name'  =>  $request['name'],
            'email' =>  $request['email'],
            'status' => User::STATUS_ACTIVE,
            'password' => '$2y$10$OSG/wQW7vbqvl7D0CVJxN.YEH3aJVcvsyIqAnjXb8w58WyxSqZYCi',
            'role' => User::ROLE_USER,
        ]);

        return redirect()->route('admin.users.show', $user);
    }

    public function show(User $user)
    {
         return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $statuses = [
            User::STATUS_WAIT => 'wait',
            User::STATUS_ACTIVE => 'active',
            User::STATUS_BANNED => 'banned',
        ];

        $roles = [
            User::ROLE_USER => 'user',
            User::ROLE_MODERATOR => 'moderator',
            User::ROLE_ADMIN => 'admin',
       ];

        return view('admin.users.edit', compact('user', 'statuses', 'roles'));
    }

    public function update(UpdateRequest $request, User $user)
    {

        $user->update($request->only(['name', 'email', 'role' ]));

        return redirect()->route('admin.users.show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index');
    }

    public function unBan(User $user)
    {   
        $user->update(['status' => $user::STATUS_ACTIVE]);
        return redirect()->route('admin.users.index');
    }

    public function ban(User $user)
    {   
        $user->update(['status' => $user::STATUS_BANNED]);
        return redirect()->route('admin.users.index');
    }

    public function verify(User $user)
    {
        $user->update([
            'status' => $user::STATUS_ACTIVE,
            'verify_token' => null,
        ]);

        return redirect()->route('admin.users.index');
    }

    public  function clearUsers()
    {
        $users = DB::table('users')->where('status', 'wait')
        ->orderBy('created_at')
        ->get();

        dd(Carbon::now());
    }
}