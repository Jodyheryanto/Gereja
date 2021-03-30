<?php

namespace App\Http\Controllers\Admin\Direktori\Komisi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Komisi;

class AdminLitbangController extends Controller
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

    function showCreateForm(){
        return view('admin.Direktori.Komisi.Litbang.create');
    }

    public function create(Request $request)
	{

        // var_dump($request->judul . ' '. $request->deskripsi .' '. $request->gambar);die;
		$request->validate([
            'nama' => 'string',
            'jabatan' => 'required',
            'awal' => 'string',
            'akhir' => 'string'
        ]);
        Komisi::insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_mulai' => $request->awal,
            'tahun_selesai' => $request->akhir,
            'bagian_komisi' => 'litbang'
        ]);
        return redirect()->route('admin.direktori.komisi.inforkom-litbang.list');
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = Komisi::where('id', $id)->first();
        return view('admin.Direktori.Komisi.Litbang.edit', compact(['anggota']));
    }

    public function update(Request $request)
	{
        $anggota = Komisi::find($request->id);
        $request->validate([
            'nama' => 'string',
            'jabatan' => 'required',
            'awal' => 'string',
            'akhir' => 'string'
        ]);
        $anggota->nama = $request->nama;
        $anggota->jabatan = $request->jabatan;
        $anggota->tahun_mulai = $request->awal;
        $anggota->tahun_selesai = $request->akhir;
        $anggota->save();
        return redirect()->route('admin.direktori.komisi.inforkom-litbang.list');
    }

    function delete(Request $request){
        $anggota = Komisi::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.komisi.inforkom-litbang.list');
    }

    function list(){
        $anggota = Komisi::where('bagian_komisi', 'litbang')->orderBy('jabatan', 'ASC')->get();
        return view('admin.Direktori.Komisi.Litbang.list', compact(['anggota']));
    }
}
