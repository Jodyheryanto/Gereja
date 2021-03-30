<?php

namespace App\Http\Controllers\Admin\Direktori\Pelayanan_Kategorial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Pelayanan_Kategorial;

class AdminPKBController extends Controller
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
        return view('admin.Direktori.Pelayanan_Kategorial.Persekutuan_Kaum_Bapak.create');
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
            'bagian_pelayanan' => 'pkb'
        ]);
        return redirect()->route('admin.direktori.pelayanan-kategorial.pkb.list');
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = Pelayanan_Kategorial::where('id', $id)->first();
        return view('admin.Direktori.Pelayanan_Kategorial.Persekutuan_Kaum_Bapak.edit', compact(['anggota']));
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
        return redirect()->route('admin.direktori.pelayanan-kategorial.pkb.list');
    }

    function delete(Request $request){
        $anggota = Pelayanan_Kategorial::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.pelayanan-kategorial.pkb.list');
    }

    function list(){
        $anggota = Pelayanan_Kategorial::where('bagian_pelayanan', 'pkb')->orderBy('id', 'ASC')->get();
        return view('admin.Direktori.Pelayanan_Kategorial.Persekutuan_Kaum_Bapak.list', compact(['anggota']));
    }
}
