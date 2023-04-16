<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        return view('index');
    }
    public function tracking(){
        return view('tracking');
    }
    public function panduan(){
        return view('panduan');
    }
    public function forum(){
        return view('forum');
    }
    public function edukasi(){
        return view('edukasi');
    }
    public function login(){
        return view('login');
        

    }
    public function register(){
        return view('register');
       

    }

    public function regist(){
        return view('regist');
    }
    public function updateEdukasi(){
        return view('updateEdukasi');
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
