<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Admin;

class UserController extends Controller
{
    public function index(){
        return view('updateUsers.upDashboardUser');
    }
    public function trackingPosition(){
        return view('updateUsers.upTracking');
    }
    public function edukasi(){
        return view('updateUsers.upEdukasi');
    }
    public function panduan(){
        return view('updateUsers.upPanduan');
    }
    public function forum(){
        return view('updateUsers.upForum');
    }
    public function profile(){
        return view('updateUsers.profileUser');
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

}
