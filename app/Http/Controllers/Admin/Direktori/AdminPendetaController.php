<?php

namespace App\Http\Controllers\Admin\Direktori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Pendeta_Jemaat;

class AdminPendetaController extends Controller
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
        return view('admin.Direktori.Pendeta.create');
    }

    public function create(Request $request)
	{

        // var_dump($request->judul . ' '. $request->deskripsi .' '. $request->gambar);die;
		$request->validate([
            'nama' => 'string',
            'awal' => 'string',
            'akhir' => 'string',
            'bagian' => 'string',
            'foto' => 'required|mimes:png,jpeg,jpg|max:2048'
        ]);
        if ($files = $request->file('foto')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('foto');
            $resorce->move("images/pendeta", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());
            
            Pendeta_Jemaat::insert([
                'nama' => $request->nama,
                'gpib' => $request->bagian,
                'tahun_mulai' => $request->awal,
                'tahun_selesai' => $request->akhir,
                'foto' => $fileName
            ]);
            return redirect()->route('admin.direktori.pendeta.list');
        }
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = Pendeta_Jemaat::where('id', $id)->first();
        return view('admin.Direktori.Pendeta.edit', compact(['anggota']));
    }

    public function update(Request $request)
	{
        $anggota = Pendeta_Jemaat::find($request->id);
        $request->validate([
            'nama' => 'string',
            'bagian' => 'string',
            'awal' => 'string',
            'akhir' => 'string'
        ]);
        if ($files = $request->file('foto')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('foto');
            $resorce->move("images/pendeta", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());
            
            $anggota->nama = $request->nama;
            $anggota->gpib = $request->bagian;
            $anggota->tahun_mulai = $request->awal;
            $anggota->tahun_selesai = $request->akhir;
            $anggota->foto = $fileName;
            $anggota->save();
            return redirect()->route('admin.direktori.pendeta.list');
        }
        else{
            $anggota->nama = $request->nama;
            $anggota->gpib = $request->bagian;
            $anggota->tahun_mulai = $request->awal;
            $anggota->tahun_selesai = $request->akhir;
            $anggota->save();
            return redirect()->route('admin.direktori.pendeta.list');
        }
    }

    function delete(Request $request){
        $anggota = Pendeta_Jemaat::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.pendeta.list');
    }

    function list(){
        $anggota = Pendeta_Jemaat::orderBy('tahun_mulai', 'DESC')->get();
        return view('admin.Direktori.Pendeta.list', compact(['anggota']));
    }
}
