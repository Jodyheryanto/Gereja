<?php

namespace App\Http\Controllers\Admin\Direktori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Koordinator_Sektor;

class AdminKoorsekController extends Controller
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
        return view('admin.Direktori.Koorsek.create');
    }

    public function create(Request $request)
	{

        // var_dump($request->judul . ' '. $request->deskripsi .' '. $request->gambar);die;
		$request->validate([
            'sektor' => 'string',
            'nama_ketua' => 'string',
            'nama_wakil' => 'string',
            'nomor_ketua' => 'string',
            'nomor_wakil' => 'string'
        ]);
        Koordinator_sektor::insert([
            'sektor_pelayanan' => $request->sektor,
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'telepon_ketua' => $request->nomor_ketua,
            'telepon_wakil' => $request->nomor_wakil
        ]);
        return redirect()->route('admin.direktori.koordinator-sektor.list');
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = Koordinator_sektor::where('id', $id)->first();
        return view('admin.Direktori.Koorsek.edit', compact(['anggota']));
    }

    public function update(Request $request)
	{
        $anggota = Koordinator_sektor::find($request->id);
        $request->validate([
            'sektor' => 'string',
            'nama_ketua' => 'string',
            'nama_wakil' => 'string',
            'nomor_ketua' => 'string',
            'nomor_wakil' => 'string'
        ]);
        $anggota->sektor_pelayanan = $request->sektor;
        $anggota->nama_ketua = $request->nama_ketua;
        $anggota->nama_wakil = $request->nama_wakil;
        $anggota->telepon_ketua = $request->nomor_ketua;
        $anggota->telepon_Wakil = $request->nomor_wakil;
        $anggota->save();
        return redirect()->route('admin.direktori.koordinator-sektor.list');
    }

    function delete(Request $request){
        $anggota = Koordinator_sektor::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.koordinator-sektor.list');
    }

    function list(){
        $anggota = Koordinator_sektor::all();
        return view('admin.Direktori.Koorsek.list', compact(['anggota']));
    }
}
