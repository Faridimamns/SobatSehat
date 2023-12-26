<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function klinik()
    {
        return view("content.LandingPages.index", [
            "title" => "Sobat Sehat"
        ]);
    }

    public function berita()
    {
        return view("content.LandingPages.berita", [
            "title" => "Sobat Sehat"
        ]);
    }

    public function jadwal()
    {
        return view("content.LandingPages.jadwal", [
            "title" => "Sobat Sehat"
        ]);
    }

}
