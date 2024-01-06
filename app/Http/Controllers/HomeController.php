<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        // return redirect('/');
        if(auth()->user()->role == 'admin'){
            return redirect('/');
            } 
        elseif(auth()->user()->role == 'kontributor'){
            return redirect('/jadwal');
            }
        else{
            return redirect('/');
        }
    }
}
