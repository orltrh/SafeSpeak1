<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;



class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            $username = $user->username;
            $email = $user->email;
            $number = $user->number;

            return view('updateUsers.profileUser', compact('username', 'email', 'number'));
        } else {
            return redirect()->route('login');
        }
    }

    public function save(Request $request)
{
    $user = Auth::user();

    if ($request->hasFile('foto')) {
        $validateData = $request->validate([
            'foto' => 'required|mimes:jpeg,png,jpg|image|max:2048',
        ]);

        $path = $request->file('foto')->store('uploads');
        $user->photo = $path;
    }

    // Redirect atau melakukan tindakan lain setelah menyimpan gambar ke database
}

}
