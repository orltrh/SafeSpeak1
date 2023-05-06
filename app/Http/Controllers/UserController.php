<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


use App\Models\Admin;

class UserController extends Controller
{
    public function home(){
        return view('users.dashboardUser');
    }
    public function upHome(){
        return view('updateUsers.upDashboardUser');
    }
    public function tracking(){
        return view('users.tracking');
    }
    public function upTracking(){
        return view('updateUsers.upTracking');
    }
    public function panduan(){
        return view('users.panduan');
    }
    public function upPanduan(){
        return view('updateUsers.upPanduan');
    }
    public function forum(){
        return view('users.forum');
    }
    public function upForum(){
        return view('updateUsers.upForum');
    }
    public function edukasi(){
        return view('users.edukasi');
    }
    public function upEdukasi(){
        return view('updateUsers.upEdukasi');
    }
    public function login(){
        return view('login');
        
    }
    public function register(){
        return view('register');
    }


    public function selfawareness() {
        $result = Admin::orderBy('id', 'desc')->first();
        $selfawareness = $result ? $result->selfawareness : null;
        return view('users.education.selfawareness', ['selfawareness' => $selfawareness]);
    }

    public function selfregulation() {
        $result = Admin::orderBy('id', 'desc')->first();
        $selfregulation = $result ? $result->selfregulation : null;
        return view('users.education.selfregulation', ['selfregulation' => $selfregulation]);
    }

    public function selfadjustment() {
        $result = Admin::orderBy('id', 'desc')->first();
        $selfadjustment = $result ? $result->selfadjustment : null;
        return view('users.education.selfadjustment', ['selfadjustment' => $selfadjustment]);
    }

    public function selfmotivation() {
        $result = Admin::orderBy('id', 'desc')->first();
        $selfmotivation = $result ? $result->selfmotivation : null;
        return view('users.education.selfmotivation', ['selfmotivation' => $selfmotivation]);
    }

    public function empathy() {
        $result = Admin::orderBy('id', 'desc')->first();
        $empathy = $result ? $result->empathy : null;
        return view('users.education.empathy', ['empathy' => $empathy]);
    }

    public function socialskills() {
        $result = Admin::orderBy('id', 'desc')->first();
        $socialskills = $result ? $result->socialskills : null;
        return view('users.education.socialskills', ['socialskills' => $socialskills]);
    }


    public function registerStore(Request $request){


        $validateData = $request->validate([
            'username'   => 'required|min:3|max:200|unique:registers',
            'email'      => 'required|email:dns|unique:registers',
            'number'     => 'required|min:11|max:13',
            'password'   => 'required|min:8|max:200',
            're-password'   => 'required|same:password',

    ]);
        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['re-password'] = Hash::make($validateData['re-password']);
        Register::create($validateData);
        return redirect()->route('users.login')
           ->with('pesan','Register berhasil');

}

    public function authentic(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        } else {
            return back()->with('loginError','Login Gagal');
        }
    }



    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/dashboard');
    // }
}
