<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
{
    // Mendapatkan data pengguna yang sedang login
    $user = Auth::user();

    // Memastikan pengguna telah terautentikasi
    if ($user) {
        // Mengambil data username, email, dan number dari pengguna
        $username = $user->username;
        $email = $user->email;
        $number = $user->number;

        // Menampilkan data pengguna ke dalam view
        return view('updateUsers.profileUser', compact('username', 'email', 'number'));
    } else {
        // Redirect ke halaman login jika pengguna tidak terautentikasi
        return redirect()->route('login');
    }
}

}
