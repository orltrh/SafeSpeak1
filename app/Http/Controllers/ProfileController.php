<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\PostDec;



class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user) {
            $username = $user->username;
            $email = $user->email;
            $number = $user->number;

            return view('updateUsers.profileUser', compact('username', 'email', 'number', 'user'));
        } else {
            return redirect()->route('login');
        }
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('post-images');
            $validateData['image'] = $imagePath;

            // Delete the previous image if exists
            if ($user->image) {
                Storage::delete($user->image);
            }
        }

        $user->image = $validateData['image'];
        $user->save();

        return redirect()->route('profile');
    }

    public function delete()
    {
        $user = Auth::user();

        if ($user->image) {
            // Delete the image file
            Storage::delete($user->image);

            // Clear the image path in the user model
            $user->image = null;
            $user->save();
        }

        return redirect()->route('profile');
    }

    public function adindex()
    {
        $user = Auth::user();

        if ($user) {
            $username = $user->username;
            $email = $user->email;
            $number = $user->number;

            return view('admin.profileAdmin', compact('username', 'email', 'number', 'user'));
        } else {
            return redirect()->route('login');
        }
    }

    public function adstore(Request $request)
    {
        $user = Auth::user();

        $validateData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('post-images');
            $validateData['image'] = $imagePath;

            // Delete the previous image if exists
            if ($user->image) {
                Storage::delete($user->image);
            }
        }

        $user->image = $validateData['image'];
        $user->save();

        return redirect()->route('adprofile');
    }

    public function addelete()
    {
        $user = Auth::user();

        if ($user->image) {
            // Delete the image file
            Storage::delete($user->image);

            // Clear the image path in the user model
            $user->image = null;
            $user->save();
        }

        return redirect()->route('adprofile');
    }
}
