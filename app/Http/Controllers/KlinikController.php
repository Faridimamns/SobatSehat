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
        return view('content.Klinik.index', [
            "title" => "Data Klinik"
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
        //
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
    public function edit(Klinik $klinik)
    {
    
        // menampilkan form edit data klinik
        return view('content.Klinik.edit', [
            "title" => "Edit Data Klinik"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Klinik $klinik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klinik $klinik)
    {
        //
    }
}
