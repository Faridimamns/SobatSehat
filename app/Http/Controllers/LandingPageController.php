<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function klinik()
    {
        return view("content.LandingPages.index", [
            "title" => "Sobat Sehat"
        ]);
    }

    public function berita()
    {
        $beritas = Berita::all();
        return view("content.LandingPages.berita", [
            "title" => "Sobat Sehat",
            'beritas' => $beritas
        ]);
    }

    public function jadwal()
    {
        return view("content.LandingPages.jadwal", [
            "title" => "Sobat Sehat"
        ]);
    }

}
