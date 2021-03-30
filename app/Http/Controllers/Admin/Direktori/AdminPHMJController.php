<?php

namespace App\Http\Controllers\Admin\Direktori;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\PHMJ;

class AdminPHMJController extends Controller
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
        return view('admin.Direktori.PHMJ.create');
    }

    public function create(Request $request)
	{

        // var_dump($request->judul . ' '. $request->deskripsi .' '. $request->gambar);die;
		$request->validate([
            'nama' => 'string',
            'jabatan' => 'string',
            'foto' => 'required|mimes:png,jpeg,jpg|max:2048'
        ]);
        if ($files = $request->file('foto')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('foto');
            $resorce->move("images/phmj", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());
            
            PHMJ::insert([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'foto' => $fileName
            ]);
            return redirect()->route('admin.direktori.phmj.list');
        }
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $anggota = PHMJ::where('id', $id)->first();
        return view('admin.Direktori.PHMJ.edit', compact(['anggota']));
    }

    public function update(Request $request)
	{
        $anggota = PHMJ::find($request->id);
        $request->validate([
            'nama' => 'string',
            'jabatan' => 'string'
        ]);
        if ($files = $request->file('foto')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('foto');
            $resorce->move("images/phmj", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());
            
            $anggota->nama = $request->nama;
            $anggota->jabatan = $request->jabatan;
            $anggota->foto = $fileName;
            $anggota->save();
            return redirect()->route('admin.direktori.phmj.list');
        }else{
            $anggota->nama = $request->nama;
            $anggota->jabatan = $request->jabatan;
            $anggota->save();
            return redirect()->route('admin.direktori.phmj.list');
        }
    }

    function delete(Request $request){
        $berita = PHMJ::where('id',$request->id)->delete();
        
        return redirect()->route('admin.direktori.phmj.list');
    }

    function list(){
        $anggota = PHMJ::all();
        return view('admin.Direktori.PHMJ.list', compact(['anggota']));
    }
}
