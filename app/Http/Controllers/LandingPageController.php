<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Jadwal;
use App\Models\Klinik;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function klinik()
    {
        $kliniks = Klinik::all();
        return view("content.LandingPages.index", [
            "title" => "Sobat Sehat",
            'kliniks' => $kliniks
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
        $jadwals = Jadwal::all();
        return view("content.LandingPages.jadwal", [
            "title" => "Sobat Sehat",
            'jadwals' => $jadwals
        ]);
    }

}
