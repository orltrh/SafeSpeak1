<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'username' => ['required'],
        'password' => ['required'],
    ], [
        'username.required' => 'Username is required.',
        'password.required' => 'Password is required.',
    ]);

    if (Auth::attempt($credentials)) {
        if (Auth::user()->is_admin == 1) {
            $request->session()->regenerate();
            $request->session()->put('verified', true);
            return redirect()->route('admin');
        } else {
            return redirect()->route('dashboard');
        }
    }

    return redirect()->route('login')->withErrors([
        'error' => 'Username or password is incorrect.',
    ]);
}


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->remove('verified');
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('dashboard');
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
