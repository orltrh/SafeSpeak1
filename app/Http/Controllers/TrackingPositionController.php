<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackingPosition;

class TrackingPositionController extends Controller
{
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
}
