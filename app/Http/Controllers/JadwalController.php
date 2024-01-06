<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('content.Jadwal.index', [
            "title" => "Data Jadwal",
            'jadwals' => $jadwals
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("content.Jadwal.create", [
            "title" => "Tambah Jadwal"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'lokasi' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required',
        ]);

        $gambarPath = $request->file('gambar')->store('gambar', 'public');

        $validated['gambar'] = $gambarPath;

        unset($validated['id']);

        Jadwal::create($validated);
        return redirect('/jadwal');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //                                                          
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jadwal = Jadwal::find($id);
        return view('content.Jadwal.edit', [
            "title" => "Edit Jadwal",
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwal = Jadwal::find($id);
        $validated = $request->validate([
            'lokasi' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
            'link' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $jadwal->update($validated);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika diperlukan
            Storage::delete($jadwal->gambar);

            // Simpan gambar baru
            $jadwal->gambar = $request->file('gambar')->store('gambar', 'public');
            $jadwal->save();
        }

        
        return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwal = Jadwal::find($id);

        if (!$jadwal) {
            return redirect('/jadwal')->with('error', 'jadwal tidak ditemukan');
        }
    
        // Hapus gambar dari storage
        Storage::delete($jadwal->gambar);
    
        // Hapus record dari database
        $jadwal->delete();

        Jadwal::destroy($id);
        return redirect('/jadwal');
    }
}
