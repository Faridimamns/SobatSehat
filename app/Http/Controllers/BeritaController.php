<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('content.Berita.index', [
            "title" => "Data Berita",
            'beritas' => $beritas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.Berita.create', [
            "title" => "Tambah Berita"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'informasi' => 'required',
            'link' => 'required',
            'gambar' => 'required',
        ]);

        // $gambar = $request->file('gambar');
        // $gambar->storeAS(path: 'public/gambarUpload', name: $gambar->hashName());

        $gambarPath = $request->file('gambar')->store('gambar', 'public');

        $validated['gambar'] = $gambarPath;

        unset($validated['id']);

        Berita::create($validated);
        return redirect('/berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = Berita::find($id);
        return view('content.Berita.edit', [
            "title" => "Edit Berita",
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = Berita::findOrFail($id);
        $validated = $request->validate([
            'judul' => 'required',
            'informasi' => 'required',
            'link' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $berita->update($validated);

        // Update gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika diperlukan
            Storage::delete($berita->gambar);

            // Simpan gambar baru
            $berita->gambar = $request->file('gambar')->store('gambar', 'public');
            $berita->save();
        }

        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)

    {
        $berita = Berita::find($id);
    
        if (!$berita) {
            return redirect('/berita')->with('error', 'Berita tidak ditemukan');
        }
    
        // Hapus gambar dari storage
        Storage::delete($berita->gambar);
    
        // Hapus record dari database
        $berita->delete();
    
        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
}
