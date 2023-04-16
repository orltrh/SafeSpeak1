<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin;
use Illuminate\Contracts\Support\ValidatedData;

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

    

    public function adselfawareness() {
        $result = Admin::select('selfawareness')->find(6);
        $selfawareness = $result ? $result->selfawareness : null;
        return view('admin.adselfawareness', ['selfawareness' => $selfawareness]);
    }

    public function adselfregulation() {
        $result = Admin::select('selfregulation')->find(6);
        $selfregulation = $result ? $result->selfregulation : null;
        return view('admin.adselfregulation', ['selfregulation' => $selfregulation]);
    }

    public function adselfadjustment() {
        $result = Admin::select('selfadjustment')->find(6);
        $selfadjustment = $result ? $result->selfadjustment : null;
        return view('admin.adselfadjustment', ['selfadjustment' => $selfadjustment]);
    }

    public function adselfmotivation() {
        $result = Admin::select('selfmotivation')->find(6);
        $selfmotivation = $result ? $result->selfmotivation : null;
        return view('admin.adselfmotivation', ['selfmotivation' => $selfmotivation]);
    }

    public function adempathy() {
        $result = Admin::select('empathy')->find(6);
        $empathy = $result ? $result->empathy : null;
        return view('admin.adempathy', ['empathy' => $empathy]);
    }

    public function adsocialskills() {
        $result = Admin::select('socialskills')->find(6);
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

    }

    public function edit()
    {
        $admin = Admin::find(6);
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

        $admin = Admin::find(6); // mengambil admin dengan id 6
        $admin->update($validateData);

        return redirect('/admin');
    }

    public function delete(){
        $admin = Admin::find(6);
        return view('admin.del',['admin' => $admin]);
    }
    
    

    public function destroy()
    {
        $admin = Admin::find(6);
        $admin->delete();

        return redirect('/admin');
    }

    
}
