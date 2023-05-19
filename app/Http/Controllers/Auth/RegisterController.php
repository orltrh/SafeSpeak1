<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\TrackingPosition;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class RegisterController extends Controller
{

    public function index(){
        return view('register');
    }

    public function registeruser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users,username|min:3|max:255',
            'number' => 'required|unique:users,number|max:14',
            'email' => 'required|email:dns,rfc|max:255|unique:users,email',
            'password' => 'required|min:8',
            're_password' => 'required|same:password',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $registerlogin = new User();
        $registerlogin->username = $request->input('username');
        $registerlogin->number = $request->input('number');
        $registerlogin->email = $request->input('email');
        $registerlogin->email_verified_at = now();
        $registerlogin->password = Hash::make($request->input('password'));
        $registerlogin->re_password = Hash::make($request->input('re_password'));
        $registerlogin->save();

        $tracking = new TrackingPosition();
        $tracking->username = $request->input('username');
        $tracking->number = $request->input('number');
        $tracking->latitude = $request->input('latitude');
        $tracking->longitude = $request->input('longitude');
        $tracking->save();

        return redirect()->route('login');
    }

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
