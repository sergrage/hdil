<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Contracts\Events\Dispatcher;
use App\Mail\VerifyMail;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{

    protected $redirectTo = '/home';

    private $mailer;
    private $dispatcher;

    public function __construct(Mailer $mailer, Dispatcher $dispatcher)
    {
        $this->middleware('guest');
        $this->mailer = $mailer;
        $this->dispatcher = $dispatcher;
    }


// метод верификации - дергается Route::get('/verify/{token}', 'Auth\RegisterController@verify')->name('register.verify');
    public function verify($token)
    {
        if (!$user = User::where('verify_token', $token)->first()) {
            return redirect()->route('login')
                ->with('error', 'Sorry your link cannot be identified.');
        }

        if ($user->status !== User::STATUS_WAIT) {
            return redirect()->route('login')
                ->with('error', 'Sorry your link cannot be identified.');
        }

        $user->status = User::STATUS_ACTIVE;
        $user->verify_token = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Your e-mail is verified. You can now login.');
    }

// from trait RegistersUsers
    public function showRegistrationForm()
    {
        return view('auth.register');
    }


// from trait RegistersUsers
// тут добавлены два метода - validate()-перенесен в RegisterRequest и create()
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'verify_token' => Str::random(),
            'status' => User::STATUS_WAIT,
            'role' => User::ROLE_USER,
        ]);

        $this->mailer->to($user->email)->send(new VerifyMail($user));


        event(new Registered($user));

        return redirect()->route('login')
                ->with('success', 'Check your email and click on the link to verify.');
    }

// from trait RegistersUsers
    protected function guard()
    {
        return Auth::guard();
    }
// from trait RegistersUsers
    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();

        return redirect()->route('login')
                        ->with('success', 'Check your email and click on the link to verify.');
    }
}
