<?php

namespace App\Http\Controllers\Admin\Direktori\Pelayanan_Kategorial;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Post;
use App\News;
use App\PHMJ;
use App\Pendeta_Jemaat;
use App\Koordinator_Sektor;
use App\Tata_Ibadah;
use App\Warta_Jemaat;

class AdminPelkatController extends Controller
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
    
    function showEditForm($id){
        $anggota = Post::where('id', $id)->first();
        return view('admin.Direktori.Pelayanan_Kategorial.edit', compact(['anggota']));
    }

    function update(Request $request){
        $anggota = Post::find($request->id);
        $request->validate([
            'foto' => 'required|mimes:png,jpeg,jpg|max:2048'
        ]);
        if ($files = $request->file('foto')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('foto');
            $resorce->move("images/pelayanan_kategorial", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            $anggota->link = $fileName;
            $anggota->save();
            return redirect(url()->previous())->with('status', 'Gambar Berhasil Diubah');
        }else{
            return redirect(url()->previous());
        }
    }
}
