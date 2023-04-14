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
    public function selfawareness(){
        return view('users.education.selfawareness');
    }
    public function selfregulation(){
        return view('users.education.selfregulation');
    }
    public function selfmotivation(){
        return view('users.education.selfmotivation');
    }
    public function socialskills(){
        return view('users.education.socialskills');
    }
    public function empathy(){
        return view('users.education.empathy');
    }
    public function selfadjustment(){
        return view('users.education.selfadjustment');
    }
}
