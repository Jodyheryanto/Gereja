<?php

namespace App\Http\Controllers\Admin\Direktori\Pelayanan_Kategorial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Pelayanan_Kategorial;

class AdminPAController extends Controller
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
        return view('admin.Direktori.Pelayanan_Kategorial.Pelayanan_Anak.create');
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
        Pelayanan_Kategorial::insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_mulai' => $request->awal,
            'tahun_selesai' => $request->akhir,
            'bagian_pelayanan' => 'pa'
        ]);
        return redirect()->route('admin.direktori.pelayanan-kategorial.pa.list');
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = Pelayanan_Kategorial::where('id', $id)->first();
        return view('admin.Direktori.Pelayanan_Kategorial.Pelayanan_Anak.edit', compact(['anggota']));
    }

    public function update(Request $request)
	{
        $anggota = Pelayanan_Kategorial::find($request->id);
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
        return redirect()->route('admin.direktori.pelayanan-kategorial.pa.list');
    }

    function delete(Request $request){
        $anggota = Pelayanan_Kategorial::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.pelayanan-kategorial.pa.list');
    }

    function list(){
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pa')->orderBy('id', 'ASC')->get();
        return view('admin.Direktori.Pelayanan_Kategorial.Pelayanan_Anak.list', compact(['anggota']));
    }
}
