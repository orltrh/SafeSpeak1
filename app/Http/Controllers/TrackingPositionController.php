<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackingPosition;
use Illuminate\Support\Facades\DB;

class TrackingPositionController extends Controller
{
    public function __construct()
    {
        $this->TrackingPosition = new TrackingPosition();
    }
    public function index()
    {
        return view('updateUsers.upCreateTracking');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:20|unique:tracking_positions,username',
            'email' => 'required|unique:tracking_positions,email',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ]);
        $tracking = new TrackingPosition();
        $tracking->username = $validateData['username'];
        $tracking->email = $validateData['email'];
        $tracking->latitude = $validateData['latitude'];
        $tracking->longitude = $validateData['longitude'];
        $tracking->save();
        return redirect()->route('uptrackingposition')->with('success', 'Data berhasil ditambahkan');
    }
    public function show()
    {
        $trackings = TrackingPosition::all();
        return view('updateUsers.upTracking', ['trackings' => $trackings]);
    }
    // // membuat function menampilkan data dari database berdasarkan pencarian
    // public function search(Request $request)
    // {
    //     $search = $request->get('search');
    //     $trackings = DB::table('tracking_positions')->where('username', 'like', '%' . $search . '%')->paginate(5);
    //     return view('updateUsers.upTracking', ['trackings' => $trackings]);
    // }
}
