<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // public function updateEdukasi(){
    //     return view('updateEdukasi');
    // }
}
