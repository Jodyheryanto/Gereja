<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Ebuletin;

class AdminEbuletinController extends Controller
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
        return view('admin.Ebuletin.create');
    }

    public function create(Request $request){
        $request->validate([
            'judul' => 'string',
            'nama_file.*' => 'required|max:2048'
        ]);

        if ($files = $request->file('nama_file')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('nama_file');
            $resorce->move("file/ebuletin", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            Ebuletin::insert([
                'judul' => $request->judul,
                'nama_file' => $fileName,
                'jenis' => $resorce->getClientOriginalExtension()
            ]);
            return redirect()->route('admin.ebuletin.list');
        }
    }

    public function update(Request $request)
	{
        $ebuletin = Ebuletin::find($request->id);
        // var_dump($request->judul_formulir);die;
        $request->validate([
            'judul' => 'string',
            'nama_file.*' => 'required|max:2048',
        ]);

        if ($files = $request->file('nama_file')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('nama_file');
            $resorce->move("file/ebuletin", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            $ebuletin->judul = $request->judul;
            $ebuletin->nama_file = $fileName;
            $ebuletin->jenis = $resorce->getClientOriginalExtension();
            $ebuletin->save();
            return redirect()->route('admin.ebuletin.list');
        }
        else{
            $ebuletin->judul = $request->judul;
            $ebuletin->save();
            return redirect()->route('admin.ebuletin.list');
        }
    }

    function showEditForm($id){
        $ebuletin = Ebuletin::where('id', $id)->first();
        return view('admin.Ebuletin.edit', compact(['ebuletin']));
    }

    function delete(Request $request){
        $ebuletin = Ebuletin::where('id',$request->id)->delete();
        
        return redirect()->route('admin.ebuletin.list');
    }

    function list(){
        $ebuletin = Ebuletin::orderBy('tanggal_upload', 'DESC')->get();
        return view('admin.Ebuletin.list', compact(['ebuletin']));
    }
}
