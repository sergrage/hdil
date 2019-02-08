<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\LoginRequest;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

use App\User;

class LoginController extends Controller
{

// защита от перебора пароля
    use ThrottlesLogins;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }

// attemptLogin() и attemptLogin() 

// attempt() находит пользователя в БД (тут по email), а пароль шифрует и сверяет со значением в БL.
        $authenticate = Auth::attempt(
        	$request->only(['email', 'password']),
        	$request->filled('remember')
        );


// если аунтефикация прошла, регенерируем сессию, очищаем число попыток неудачного ввода.
        if($authenticate) {
        	$request->session()->regenerate();
        	$this->clearLoginAttempts($request);
        	$user = Auth::user();

        	// authenticated()
        	if($user->isWait()) {
        		Auth::logout();
        		return back()->with('error', 'You need to confirm your account. Please check your email.');
        	}
        	
        	if($user->isBanned()) {
        		Auth::logout();
        		return back()->with('error', 'You are banned. Sorry.');
        	}

            if(!$user->policy){
                return redirect()->route('fillprofile.index');
            }

        	return redirect()->intended(route('home'));
        }

        $this->incrementLoginAttempts($request);

// sendFailedLoginResponse
        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('home');
    }

    public function username()
    {
        return 'email';
    }
}
