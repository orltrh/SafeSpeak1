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

    public function show()
    {
        $trackings = TrackingPosition::all();
        return view('updateUsers.upTracking', ['trackings' => $trackings]);
    }

    public function adminShow()
    {
        $trackings = TrackingPosition::all();
        return view('admin.adTracking', ['trackings' => $trackings]);
    }

    public function update(Request $request){
        $tracking = TrackingPosition::find($request->username);

        // Check if the tracking position exists.
        if (!$tracking) {
            return('Your Location not found');
        }

        $tracking->latitude = $request->latitude;
        $tracking->longitude = $request->longitude;
        $tracking->update();

        return redirect()->route('uptrackingposition')->with('success', 'Data berhasil diupdate');
    }

    public function search(Request $request)
    {
        $username = $request->input('username');
        $users = DB::table('tracking_positions')
            ->where('username', 'like', "%$username%")
            ->get();
        return response()->json($users);
    }

}
