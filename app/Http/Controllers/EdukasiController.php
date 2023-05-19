<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class EdukasiController extends Controller
{
    // public function index()
    // {
    //     $articles = Edukasi::all();

    //     return view('index', compact('articles'));
    // }

    // public function create()
    // {
    //     return view('articles.create');
    // }

    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $imageName = time() . '.' . $request->image->extension();
    //     $request->image->move(public_path('images'), $imageName);

    //     $article = new Edukasi();
    //     $article->title = $validatedData['title'];
    //     $article->content = $validatedData['content'];
    //     $article->image = $imageName;
    //     $article->save();

    //     return redirect()->route('dashboard')->with('success', 'Article created successfully.');
    // }
//     public function index()
// {
//     $admins = Admin::all();
//     return view('admin.adEdukasi', compact('admins'));

// }

// public function show(Admin $admins)
// {
//     return view('admin.edu', compact('admin'));
// }

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

    return redirect()->route('admin.index')->with('success', 'Data berhasil ditambahkan.');
}

// public function index()
// {
//     $admins = Admin::orderBy('created_at', 'desc')->paginate(10);
//     return view('admin.index', compact('admins'));
// }

// public function show($id)
// {
//     $admin = Admin::findOrFail($id);
//     return view('admin.show', compact('admin'));
// }

public function index()
{
    $categories = Admin::pluck('kategori')->unique();
    $carouselItems = Admin::take(6)->get(); // Mengambil 5 item dari tabel admins untuk carousel

    return view('admin.adEdukasi', compact('categories', 'carouselItems'));
}

public function showCategory($category)
{
    $categoryItems = Admin::where('kategori', $category)->get();

    return view('admin.edu', compact('categoryItems'));
}

}
