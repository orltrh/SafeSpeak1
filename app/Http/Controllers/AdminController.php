<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Admin;
use App\Models\Edukasi;
use App\Models\Admin_login;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboardAdmin');
    }
    public function trackingPosition(){
        return view('admin.adTracking');
    }
    public function edukasi(){
        return view('admin.adEdukasi');
    }
    public function panduan(){
        return view('admin.adPanduan');
    }
    public function forum(){
        return view('admin.adForum');
    }

    public function crud(){
        return view('admin.crud');
    }

    public function createEdukasi(){
        return view('admin.createEdukasi');
    }

    public function prosesCreate(Request $request)
    {
        // Validasi inputan form
        $validatedData = $request->validate([
            'materi' => 'required',
            'judul' => 'required',
            'paragraf1' => 'required',
            'image' => 'required|image|max:2048',
        ]);

    // Simpan data ke database
    $edukasi = new Edukasi;
    $edukasi->materi = $request->materi;
    $edukasi->judul = $request->judul;
    $edukasi->paragraf1 = $request->paragraf1;
    $edukasi->paragraf2 = $request->paragraf2;
    $edukasi->paragraf3 = $request->paragraf3;
    $edukasi->paragraf4 = $request->paragraf4;
    $edukasi->paragraf5 = $request->paragraf5;

    // Upload gambar jika ada
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('post-images', 'public');
        $validatedData['image'] = $imagePath;

    }
    $edukasi->image = $validatedData['image'];

    $edukasi->save();

    // Redirect atau melakukan tindakan lainnya setelah menyimpan ke database
    return redirect()->route('aEdukasi');
    }

    public function showSubMateri($materi){
    $data = Edukasi::where('materi', $materi)->get();
    return view('admin.adSubMateri', compact('data'));
    }

    public function showMateri($judul){
    $data = Edukasi::where('judul', $judul)->first();
    return view('admin.adMateri', compact('data'));
    }

    public function updateMateri($judul)
    {
        $data = Edukasi::where('judul', $judul)->first();
        return view('admin.editEdukasi', compact('data'));
    }

    public function prosesUpdateMateri(Request $request, $judul)
    {
    // Temukan data berdasarkan judul
    $data = Edukasi::where('judul', $judul)->first();

    // Perbarui data berdasarkan input permintaan
    $data->judul = $request->input('judul');
    $data->materi = $request->input('materi');
    $data->paragraf1 = $request->input('paragraf1');
    $data->paragraf2 = $request->input('paragraf2');
    $data->paragraf3 = $request->input('paragraf3');
    $data->paragraf4 = $request->input('paragraf4');
    $data->paragraf5 = $request->input('paragraf5');

    // Perbarui gambar baru jika tersedia
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('post-images');
        $data->image = $imagePath;
    }

    // Simpan data yang diperbarui ke dalam database
    $data->save();

    return redirect()->route('aEdukasi');
    }


    public function deleteMateri($judul)
    {
        // Temukan data berdasarkan judul
        $data = Edukasi::where('judul', $judul)->firstOrFail();

        // Hapus gambar terkait jika ada
        if ($data->image) {
            Storage::delete($data->image);
        }

        // Hapus data dari database
        $data->delete();

        return redirect()->route('aEdukasi');
    }
}
