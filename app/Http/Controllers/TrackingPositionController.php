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
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|max:20|unique:tracking_positions,username',
            'email' => 'required|unique:tracking_positions,email',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ]);
        $tracking = new TrackingPosition();
        $tracking->username = $request->username;
        $tracking->email = $request->email;
        $tracking->latitude = $request->latitude;
        $tracking->longitude = $request->longitude;
        $tracking->save();
        return redirect()->route('uptrackingposition')->with('success', 'User created successfully.');
    }
}
