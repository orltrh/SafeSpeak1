<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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






    

    
}
