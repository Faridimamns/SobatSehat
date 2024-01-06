<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

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
        $berita = Berita::find($id);
        $validated = $request->validate([
            'judul' => 'required',
            'informasi' => 'required',
            'link' => 'required',
            'gambar' => 'required'
        ]);
        $berita->update($validated);
        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::destroy($id);
        return redirect('/berita');
    }
}
