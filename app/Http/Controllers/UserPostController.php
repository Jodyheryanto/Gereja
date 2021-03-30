<?php

namespace App\Http\Controllers;

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
use App\Formulir;
use App\Pelayanan_Kategorial;
use App\Komisi;
use App\Galeri;
use App\MajelisJemaat;
use App\Ebuletin;

class UserPostController extends Controller
{
    function index(){
        $post = Post::where('id', 1)->first();
        $news = News::orderBy('updated_at', 'DESC')->get();
        return view('index', compact(['post', 'news']));
    }

    function visidanmisi(){
        $post = Post::where('id', 2)->first();
        return view('visi_misi', compact(['post']));
    }

    function pemahaman_iman(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 3)->first();
        return view('pemahaman_iman', compact(['post']));
    }

    function sejarah_gereja(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 4)->first();
        return view('sejarah_gereja', compact(['post']));
    }

    function galeri(){
        // return response()->view('errors.403', [], 403);
        $galeri = Galeri::all();
        return view('galeri', compact(['galeri']));
    }

    function ebuletin(){
        // return response()->view('errors.403', [], 403);
        $ebuletin = Ebuletin::orderBy('tanggal_upload', 'DESC')->get();
        return view('ebuletin', compact(['ebuletin']));
    }

    function phmj(){
        // return response()->view('errors.403', [], 403);
        $anggota = PHMJ::all();
        $post = Post::where('id', 7)->first();
        return view('phmj', compact(['anggota', 'post']));
    }

    function pendeta_jemaat(){
        // return response()->view('errors.403', [], 403);
        $anggota = Pendeta_Jemaat::orderBy('tahun_mulai', 'DESC')->get();
        return view('pendeta_jemaat', compact(['anggota']));
    }

    function majelis_jemaat(){
        // return response()->view('errors.403', [], 403);
        $anggota = MajelisJemaat::orderBy('id', 'ASC')->get();
        $masa_bakti = MajelisJemaat::orderBy('tahun_mulai', 'DESC')->first();
        return view('majelis_jemaat', compact(['anggota', 'masa_bakti']));
    }

    function koordinator_sektor(){
        // return response()->view('errors.403', [], 403);
        $anggota = Koordinator_Sektor::all();
        return view('koordinator_sektor', compact(['anggota']));
    }

    function tata_ibadah(){
        $tata_ibadah = Tata_Ibadah::orderBy('updated_at', 'DESC')->take(4)->get();
        return view('tata_ibadah', compact(['tata_ibadah']));
    }

    function warta_jemaat(){
        $warta_jemaat = Warta_Jemaat::orderBy('updated_at', 'DESC')->take(4)->get();
        return view('warta_jemaat', compact(['warta_jemaat']));
    }

    function hubungi_kami(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 5)->first();
        return view('hubungi_kami', compact(['post']));
    }

    function pelayanan_anak(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 8)->first();
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pa')->get();
        $masa_bakti = Pelayanan_Kategorial::where('bagian_pelayanan', 'pa')->orderBy('tahun_mulai', 'DESC')->first();
        return view('user.Direktori.Pelayanan_Kategorial.pelayanan_anak', compact(['anggota', 'masa_bakti', 'post']));
    }

    function persekutuan_teruna(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 9)->first();
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pt')->get();
        $masa_bakti = Pelayanan_Kategorial::where('bagian_pelayanan', 'pt')->orderBy('tahun_mulai', 'DESC')->first();
        return view('user.Direktori.Pelayanan_Kategorial.persekutuan_teruna', compact(['anggota', 'masa_bakti', 'post']));
    }

    function gerakan_pemuda(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 10)->first();
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'gp')->get();
        $masa_bakti = Pelayanan_Kategorial::where('bagian_pelayanan', 'gp')->orderBy('tahun_mulai', 'DESC')->first();
        return view('user.Direktori.Pelayanan_Kategorial.gerakan_pemuda', compact(['anggota', 'masa_bakti', 'post']));
    }

    function persekutuan_kaum_perempuan(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 12)->first();
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pkp')->get();
        $masa_bakti = Pelayanan_Kategorial::where('bagian_pelayanan', 'pkp')->orderBy('tahun_mulai', 'DESC')->first();
        return view('user.Direktori.Pelayanan_Kategorial.persekutuan_kaum_perempuan', compact(['anggota', 'masa_bakti', 'post']));
    }
    
    function persekutuan_kaum_bapak(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 11)->first();
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pkb')->get();
        $masa_bakti = Pelayanan_Kategorial::where('bagian_pelayanan', 'pkb')->orderBy('tahun_mulai', 'DESC')->first();
        return view('user.Direktori.Pelayanan_Kategorial.persekutuan_kaum_bapak', compact(['anggota', 'masa_bakti', 'post']));
    }

    function persekutuan_kaum_lanjut_usia(){
        // return response()->view('errors.403', [], 403);
        $post = Post::where('id', 13)->first();
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pklu')->get();
        $masa_bakti = Pelayanan_Kategorial::where('bagian_pelayanan', 'pklu')->orderBy('tahun_mulai', 'DESC')->first();
        return view('user.Direktori.Pelayanan_Kategorial.persekutuan_kaum_lanjut_usia', compact(['anggota', 'masa_bakti', 'post']));
    }

    function teologi(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'teologi')->get();
        return view('user.Direktori.Komisi.teologi', compact(['anggota']));
    }

    function musik_gerejawi(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'musik')->get();
        return view('user.Direktori.Komisi.musik', compact(['anggota']));
    }
    
    function pelayanan_kesaksian(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'pekes')->get();
        return view('user.Direktori.Komisi.pekes', compact(['anggota']));
    }

    function diakoni(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'diakoni')->get();
        return view('user.Direktori.Komisi.diakoni', compact(['anggota']));
    }

    function kalvari(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'kalvari')->get();
        return view('user.Direktori.Komisi.kalvari', compact(['anggota']));
    }

    function germasa(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'germasa')->get();
        return view('user.Direktori.Komisi.germasa', compact(['anggota']));
    }

    function ppsdi(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'ppsdi')->get();
        return view('user.Direktori.Komisi.ppsdi', compact(['anggota']));
    }

    function peg(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'peg')->get();
        return view('user.Direktori.Komisi.peg', compact(['anggota']));
    }

    function rumah_tangga(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'rt')->get();
        return view('user.Direktori.Komisi.rumah_tangga', compact(['anggota']));
    }

    function inforkom_litbang(){
        // return response()->view('errors.403', [], 403);
        $anggota = Komisi::where('bagian_komisi', 'litbang')->get();
        return view('user.Direktori.Komisi.litbang', compact(['anggota']));
    }
}
