<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Post;
use App\News;
use App\PHMJ;
use App\Pendeta_Jemaat;
use App\Koordinator_Sektor;
use App\Tata_Ibadah;
use App\Warta_Jemaat;

class AdminController extends Controller
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
    
    function dashboard(){
        $countPages = Post::count();
        $countNews = News::count();
        $countPHMJ = PHMJ::count();
        $countPendetaJemaat = Pendeta_Jemaat::count();
        $countKoordinatorSektor = Koordinator_Sektor::count();
        
        return view('admin.dashboard', compact(['countPages', 'countNews', 'countPHMJ', 'countPendetaJemaat', 'countKoordinatorSektor']));
    }

    function halaman(){
        $halaman = Post::all();
        return view('admin.halaman', compact(['halaman']));
    }

    function berita(){
        $berita = News::all();
        return view('admin.berita', compact(['berita']));
    }
}
