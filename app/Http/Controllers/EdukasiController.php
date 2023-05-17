<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edukasi;

class EdukasiController extends Controller
{
    public function index()
    {
        // Fetch articles from the database
        $articles = Edukasi::all();

        // Pass the articles to the view
        return view('index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Create a new article
        $article = new Edukasi();
        $article->title = $validatedData['title'];
        $article->content = $validatedData['content'];
        $article->image = $imageName;
        $article->save();

        // Redirect back to the index page with a success message
        return redirect()->route('dashboard')->with('success', 'Article created successfully.');
    }

}
