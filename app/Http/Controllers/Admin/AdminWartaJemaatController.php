<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Warta_Jemaat;

class AdminWartaJemaatController extends Controller
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
        return view('admin.Warta_Jemaat.create');
    }

    public function create(Request $request){
        $request->validate([
            'judul_warta_jemaat' => 'string',
            'nama_file.*' => 'required|mimes:doc,pdf,docx,zip|max:2048'
        ]);

        if ($files = $request->file('nama_file')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('nama_file');
            $resorce->move("file/warta_jemaat", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            Warta_Jemaat::insert([
                'judul_warta_jemaat' => $request->judul_warta_jemaat,
                'nama_file' => $fileName
            ]);
            return redirect()->route('admin.warta-jemaat.list');
        }
    }

    public function update(Request $request)
	{
        $warta_jemaat = Warta_Jemaat::find($request->id);
        // var_dump($request->judul_formulir);die;
        $request->validate([
            'judul_warta_jemaat' => 'string',
            'nama_file.*' => 'required|mimes:doc,pdf,docx,zip|max:2048',
            'tata_cara' => 'string'
        ]);

        if ($files = $request->file('nama_file')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('nama_file');
            $resorce->move("file/warta_jemaat", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            $warta_jemaat->judul_warta_jemaat = $request->judul_warta_jemaat;
            $warta_jemaat->nama_file = $fileName;
            $warta_jemaat->save();
            return redirect()->route('admin.warta-jemaat.list');
        }
        else{
            $warta_jemaat->judul_warta_jemaat = $request->judul_warta_jemaat;
            $warta_jemaat->save();
            return redirect()->route('admin.warta-jemaat.list');
        }
    }

    function showEditForm($id){
        $warta_jemaat = Warta_Jemaat::where('id', $id)->first();
        return view('admin.Warta_Jemaat.edit', compact(['warta_jemaat']));
    }

    function delete(Request $request){
        $warta_jemaat = Warta_Jemaat::where('id',$request->id)->delete();
        
        return redirect()->route('admin.warta-jemaat.list');
    }

    function list(){
        $warta_jemaat = Warta_Jemaat::orderBy('updated_at', 'DESC')->get();
        return view('admin.Warta_Jemaat.list', compact(['warta_jemaat']));
    }

}
