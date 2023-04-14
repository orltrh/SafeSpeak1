<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboardAdmin');
    }
    public function tracking(){
        return view('admin.adTracking');
    }
    public function panduan(){
        return view('admin.adPanduan');
    }
    public function forum(){
        return view('admin.adForum');
    }
    public function edukasi(){
        return view('admin.adEdukasi');
    }
    public function updateEdukasi(){
        return view('admin.updateEdukasi');
    }
}
