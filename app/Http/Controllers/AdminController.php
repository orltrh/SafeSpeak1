<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboardAdmin');
    }
    public function tracking(){
        return view('admin.tracking');
    }
    public function panduan(){
        return view('admin.panduan');
    }
    public function forum(){
        return view('admin.adForum');
    }
    public function edukasi(){
        return view('admin.edukasi');
    }
    public function updateEdukasi(){
        return view('admin.updateEdukasi');
    }
}
