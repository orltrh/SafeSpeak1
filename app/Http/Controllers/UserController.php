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
    public function index(){
        return view('users.dashboardUser');
    }
    public function tracking(){
        return view('users.tracking');
    }
    public function panduan(){
        return view('users.panduan');
    }
    public function forum(){
        return view('users.forum');
    }
    public function edukasi(){
        return view('users.edukasi');
    }
    public function login(){
        return view('login');
        

    }
    public function register(){
        return view('register');
    }
   

    public function selfawareness() {
        $result = Admin::select('selfawareness')->find(6);
        $selfawareness = $result ? $result->selfawareness : null;
        return view('users.education.selfawareness', ['selfawareness' => $selfawareness]);
    }

    public function selfregulation() {
        $result = Admin::select('selfregulation')->find(6);
        $selfregulation = $result ? $result->selfregulation : null;
        return view('users.education.selfregulation', ['selfregulation' => $selfregulation]);
    }

    public function selfadjustment() {
        $result = Admin::select('selfadjustment')->find(6);
        $selfadjustment = $result ? $result->selfadjustment : null;
        return view('users.education.selfadjustment', ['selfadjustment' => $selfadjustment]);
    }

    public function selfmotivation() {
        $result = Admin::select('selfmotivation')->find(6);
        $selfmotivation = $result ? $result->selfmotivation : null;
        return view('users.education.selfmotivation', ['selfmotivation' => $selfmotivation]);
    }

    public function empathy() {
        $result = Admin::select('empathy')->find(6);
        $empathy = $result ? $result->empathy : null;
        return view('users.education.empathy', ['empathy' => $empathy]);
    }

    public function socialskills() {
        $result = Admin::select('socialskills')->find(6);
        $socialskills = $result ? $result->socialskills : null;
        return view('users.education.socialskills', ['socialskills' => $socialskills]);
    }

    // public function loginStore(Request $request)
    // {
    //     $validateDataLogin = $request->validate([
    //         'username' => 'required|min:3|max:200',
    //         'password' => 'required|min:8|max:200',
    //     ]);

    //     UserStore::create($validateDataLogin);

    //     return "berhasil login";
    // }

    public function registerStore(Request $request){

    
        $validateData = $request->validate([
            'username'   => 'required|min:3|max:200', 
            'email'      => 'required|email:dns|unique:registers',
            'number'     => 'required|min:11|max:13',     
            'password'   => 'required|min:8|max:200',  

            
            
            
    ]);
        $validateData['password'] = Hash::make($validateData['password']);
        Register::create($validateData);
        return redirect()->route('users.login')
           ->with('pesan','Register berhasil');

}

    public function authentic(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // $credentials = $request->validate([
        //     'username' => ['required'],
        //     'password' => ['required'],
        // ]);
        
        $user = Register::table('register')->where('username', $request->username)->first();
        
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::attempt($user);
            $request->session()->regenerate();
            return 'sukses';
        } else {
            return 'gagal';
        }
        
        return back()->with('loginError', 'Login Gagal');
        
    }    
}
