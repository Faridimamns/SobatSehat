<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akuns = User::all();
        return view('content.Akun.index', [
            "title" => "Data Akun",
            'akuns' => $akuns
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.Akun.create', [
            "title" => "Tambah Akun"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
        ]);

        unset($validated['id']);

        User::create($validated);
        return redirect('/akun');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $akun = User::find($id);
        return view('content.Akun.edit', [
            "title" => "Edit Akun",
            'akun' => $akun
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $akun = User::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',

        ]);
        $akun->update($validated);
        $akun->save();

        return redirect('/akun');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/akun');
    }
}
