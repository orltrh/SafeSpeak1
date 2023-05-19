<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class EdukasiController extends Controller
{
   

public function create()
{
    return view('admin.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'kategori' => 'required',
        'judul' => 'required',
        'konten' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imageName = time() . '.' . $request->gambar->extension();
    $request->gambar->move(public_path('images'), $imageName);

    $admin = new Admin();
    $admin->kategori = $validatedData['kategori'];
    $admin->judul = $validatedData['judul'];
    $admin->konten = $validatedData['konten'];
    $admin->gambar = $imageName;
    $admin->save();

    return redirect()->route('aEdukasi')->with('success', 'Data berhasil ditambahkan.');
}

public function index()
{
    $admins = Admin::orderBy('created_at', 'desc')->paginate(10);
    return view('admin.adEdukasi', compact('admins'));
}

public function show($id)
{
    $admin = Admin::findOrFail($id);
    return view('admin.show', compact('admin'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'kategori' => 'required',
        'judul' => 'required',
        'konten' => 'required',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $admin = Admin::findOrFail($id);

    // Update data
    $admin->kategori = $validatedData['kategori'];
    $admin->judul = $validatedData['judul'];
    $admin->konten = $validatedData['konten'];

    // Update gambar jika ada perubahan
    if ($request->hasFile('gambar')) {
        $imageName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);
        $admin->gambar = $imageName;
    }

    $admin->save();

    return redirect()->route('admins.show', $admin->id)->with('success', 'Data berhasil diperbarui.');
}

public function destroy($id)
{
    $admin = Admin::findOrFail($id);
    
    // Hapus gambar dari direktori
    $imagePath = public_path('images') . '/' . $admin->gambar;
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    $admin->delete();

    return redirect()->route('aEdukasi')->with('success', 'Data berhasil dihapus.');
}

public function edit($id)
{
    $admin = Admin::findOrFail($id);
    return view('admin.update', compact('admin'));
}

public function delete($id)
{
    $admin = Admin::findOrFail($id);
    return view('admin.delete', compact('admin'));
}



}
