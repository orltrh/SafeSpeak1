<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edukasi;

use Illuminate\Support\Facades\Storage;
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

    public function showSubMateri($materi){
        $data = Edukasi::where('materi', $materi)->get();
        return view('updateUsers.upSubMateri', compact('data'));
        }

    public function showMateri($judul){
        $data = Edukasi::where('judul', $judul)->first();
        return view('updateUsers.upMateri', compact('data'));
        }
}
