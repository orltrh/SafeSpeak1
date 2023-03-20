<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function updateEdukasi(){
        return view('updateEdukasi');
    }
}
