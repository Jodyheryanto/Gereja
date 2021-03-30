<?php

namespace App\Http\Controllers\Admin\Direktori\Komisi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Komisi;

class AdminPEGController extends Controller
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
        return view('admin.Direktori.Komisi.PEG.create');
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
            'bagian_komisi' => 'peg'
        ]);
        return redirect()->route('admin.direktori.komisi.peg.list');
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = Komisi::where('id', $id)->first();
        return view('admin.Direktori.Komisi.PEG.edit', compact(['anggota']));
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
        return redirect()->route('admin.direktori.komisi.peg.list');
    }

    function delete(Request $request){
        $anggota = Komisi::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.komisi.peg.list');
    }

    function list(){
        $anggota = Komisi::where('bagian_komisi', 'peg')->orderBy('jabatan', 'ASC')->get();
        return view('admin.Direktori.Komisi.PEG.list', compact(['anggota']));
    }
}
