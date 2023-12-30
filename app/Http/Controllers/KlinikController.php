<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;

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
        $klinik->update($validated);
        return redirect('/klinik');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Klinik::destroy($id);
        return redirect('/klinik');
    }
}
