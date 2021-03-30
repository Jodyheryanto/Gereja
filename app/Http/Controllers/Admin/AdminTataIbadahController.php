<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Tata_Ibadah;

class AdminTataIbadahController extends Controller
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
        return view('admin.Tata_Ibadah.create');
    }

    public function create(Request $request){
        $request->validate([
            'judul_tata_ibadah' => 'string',
            'nama_file.*' => 'required|mimes:doc,pdf,docx,zip|max:2048'
        ]);

        if ($files = $request->file('nama_file')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('nama_file');
            $resorce->move("file/tata_ibadah", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            Tata_Ibadah::insert([
                'judul_tata_ibadah' => $request->judul_tata_ibadah,
                'nama_file' => $fileName
            ]);
            return redirect()->route('admin.tata-ibadah.list');
        }
    }

    public function update(Request $request)
	{
        $tata_ibadah = Tata_Ibadah::find($request->id);
        // var_dump($request->judul_formulir);die;
        $request->validate([
            'judul_tata_ibadah' => 'string',
            'nama_file.*' => 'required|mimes:doc,pdf,docx,zip|max:2048',
            'tata_cara' => 'string'
        ]);

        if ($files = $request->file('nama_file')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('nama_file');
            $resorce->move("file/tata_ibadah", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            $tata_ibadah->judul_tata_ibadah = $request->judul_tata_ibadah;
            $tata_ibadah->nama_file = $fileName;
            $tata_ibadah->save();
            return redirect()->route('admin.tata-ibadah.list');
        }
        else{
            $tata_ibadah->judul_tata_ibadah = $request->judul_tata_ibadah;
            $tata_ibadah->save();
            return redirect()->route('admin.tata-ibadah.list');
        }
    }

    function showEditForm($id){
        $tata_ibadah = Tata_Ibadah::where('id', $id)->first();
        return view('admin.Tata_Ibadah.edit', compact(['tata_ibadah']));
    }

    function delete(Request $request){
        $tata_ibadah = Tata_Ibadah::where('id',$request->id)->delete();
        
        return redirect()->route('admin.tata-ibadah.list');
    }

    function list(){
        $tata_ibadah = Tata_Ibadah::orderBy('updated_at', 'DESC')->get();
        return view('admin.Tata_Ibadah.list', compact(['tata_ibadah']));
    }
}
