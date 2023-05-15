<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin;
use App\Models\Admin_login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboardAdmin');
    }
    public function trackingPosition(){
        return view('admin.adTracking');
    }
    public function edukasi(){
        return view('admin.adEdukasi');
    }
    public function panduan(){
        return view('admin.adPanduan');
    }
    public function forum(){
        return view('admin.adForum');
    }


    public function adSelfAwareness() {
        $result = Admin::orderBy('id', 'desc')->first(); // mengambil data dengan id terakhir
        $selfawareness = $result ? $result->selfawareness : null;
        return view('admin.adselfawareness', ['selfawareness' => $selfawareness]);
    }
    public function adselfregulation() {
        $result = Admin::orderBy('id', 'desc')->first(); // mengambil data dengan id terakhir
        $selfregulation = $result ? $result->selfregulation : null;
        return view('admin.adselfregulation', ['selfregulation' => $selfregulation]);
    }

    public function adselfadjustment() {
        $result = Admin::orderBy('id', 'desc')->first(); // mengambil data dengan id terakhir
        $selfadjustment = $result ? $result->selfadjustment : null;
        return view('admin.adselfadjustment', ['selfadjustment' => $selfadjustment]);
    }

    public function adselfmotivation() {
        $result = Admin::orderBy('id', 'desc')->first(); // mengambil data dengan id terakhir
        $selfmotivation = $result ? $result->selfmotivation : null;
        return view('admin.adselfmotivation', ['selfmotivation' => $selfmotivation]);
    }

    public function adempathy() {
        $result = Admin::orderBy('id', 'desc')->first(); // mengambil data dengan id terakhir
        $empathy = $result ? $result->empathy : null;
        return view('admin.adempathy', ['empathy' => $empathy]);
    }

    public function adsocialskills() {
        $result = Admin::orderBy('id', 'desc')->first(); // mengambil data dengan id terakhir
        $socialskills = $result ? $result->socialskills : null;
        return view('admin.adsocialskills', ['socialskills' => $socialskills]);
    }

    

    

    

    public function create(){
        return view('admin.createEdukasi');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'selfawareness' => 'required',
            'selfregulation' => 'required',
            'selfmotivation' => 'required',
            'empathy' => 'required',
            'socialskills' => 'required',
            'selfadjustment' => 'required'
        ]);

        $admin = new Admin();
        $admin -> selfawareness = $validateData['selfawareness'];
        $admin -> selfregulation = $validateData['selfregulation'];
        $admin -> selfmotivation = $validateData['selfmotivation'];
        $admin -> empathy = $validateData['empathy'];
        $admin -> socialskills = $validateData['socialskills'];
        $admin -> selfadjustment = $validateData['selfadjustment'];
        $admin -> save();

        return redirect('/admin');

    }

    public function edit()
    {
    $admin = Admin::orderBy('id', 'desc')->first();
    return view('admin.editEdukasi', ['admin' => $admin]);
    }
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'selfawareness' => 'required',
            'selfregulation' => 'required',
            'selfmotivation' => 'required',
            'empathy' => 'required',
            'socialskills' => 'required',
            'selfadjustment' => 'required'
        ]);

        $admin = Admin::orderBy('id', 'desc')->first(); // mengambil admin dengan id terakhir
        $admin->update($validateData);

        return redirect('/admin');
    }
    public function delete(){
        $admin = Admin::orderBy('id', 'desc')->first();
        return view('admin.del',['admin' => $admin]);
    }
    public function destroy()
    {
        $count = Admin::count(); // menghitung jumlah data di dalam database
        if ($count == 1) {
            return redirect('/admin')->withErrors(['error' => 'Cannot delete the last record']);
        }

        $admin = Admin::orderBy('id', 'desc')->first(); // mengambil admin dengan id terakhir
        $admin->delete();

        return redirect('/admin');
    }



    
}
