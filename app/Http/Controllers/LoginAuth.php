<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginAuth extends Controller
{
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
