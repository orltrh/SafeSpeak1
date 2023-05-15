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
            'noWA' => 'required|max:13|unique:tracking_positions,noWA',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255',
        ]);
        $tracking = new TrackingPosition();
        $tracking->username = $validateData['username'];
        $tracking->noWA = $validateData['noWA'];
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

    public function update(Request $request){
        $tracking = TrackingPosition::find($request->username);

        // Check if the tracking position exists.
        if (!$tracking) {
            dd('Tracking position not found');
        }

        $tracking->latitude = $request->latitude;
        $tracking->longitude = $request->longitude;
        $tracking->update();

        return redirect()->route('uptrackingposition')->with('success', 'Data berhasil diupdate');
    }
    public function search(Request $request)
    {
        // dd("masuk");
        $username = $request->input('username');
        $users = DB::table('tracking_positions')
            ->where('username', 'like', "%$username%")
            ->get();
        return response()->json($users);
    }
}
