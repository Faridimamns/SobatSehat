<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KlinikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // menampilkan halaman utama dashboard klinik
        $kliniks = Klinik::all();
        return view('content.Klinik.index', [
            "title" => "Data Klinik",
            "kliniks" => $kliniks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form tambah data klinik
        return view('content.Klinik.create', [
            "title" => "Tambah Klinik"
        ]);

        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //menambahkan data klinik
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'penyakit' => 'required',
            'gambar' => 'required',
        ]);
    

        $gambarPath = $request->file('gambar')->store('gambar', 'public');

        $validated['gambar'] = $gambarPath;


        unset($validated['id']);
    
        Klinik::create($validated);
        return redirect('/klinik');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Klinik $klinik)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
    
        $klinik = Klinik::find($id);
        // menampilkan form edit data klinik
        return view('content.Klinik.edit', [
            "title" => "Edit Data Klinik",
            'klinik' => $klinik
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $klinik = Klinik::find($id);
        $validated = $request->validate([

            'nama' => 'required',
            'alamat' => 'required',
            'penyakit' => 'required',
            'gambar' => 'required'
        ]);

        // Update gambar jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika diperlukan
            Storage::delete($klinik->gambar);

            // Simpan gambar baru
            $klinik->gambar = $request->file('gambar')->store('gambar', 'public');
            $klinik->save();
        }

        $klinik->update($validated);
        return redirect('/klinik');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        // Klinik::destroy($id);
        // return redirect('/klinik');

        $klinik = Klinik::find($id);

        if (!$klinik) {
            return redirect('/klinik')->with('error', 'klinik tidak ditemukan');
        }
    
        // Hapus gambar dari storage
        Storage::delete($klinik->gambar);
    
        // Hapus record dari database
        $klinik->delete();

        Klinik::destroy($id);
        return redirect('/klinik');
    }
}
