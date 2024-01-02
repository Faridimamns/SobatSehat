<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

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
        ]);
        $jadwal->update($validated);
        return redirect('/jadwal');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jadwal::destroy($id);
        return redirect('/jadwal');
    }
}
