<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\Galeri;

class AdminGaleriController extends Controller
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
        return view('admin.Galeri.create');
    }

    public function create(Request $request)
	{

        // var_dump($request->judul . ' '. $request->deskripsi .' '. $request->gambar);die;
		$request->validate([
			'deskripsi_gambar' => 'required',
			'gambar' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($files = $request->file('gambar')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('gambar');
            $resorce->move("images/galeri", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            // insert data ke table books
            Galeri::insert([
                'image_description' => $request->deskripsi_gambar,
                'image' => $fileName
            ]);
            // alihkan halaman tambah buku ke halaman books
            return redirect()->route('admin.galeri.list');
        }
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $galeri = Galeri::where('id', $id)->first();
        return view('admin.Galeri.edit', compact(['galeri']));
    }

    public function update(Request $request)
	{
        $galeri = Galeri::find($request->id);
        $request->validate([
            'judul' => 'string'
        ]);
        if ($files = $request->file('gambar')) {
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('gambar');
            $resorce->move("images/galeri", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());
            $galeri->image_description = $request->deskripsi_gambar;
            $galeri->image = $fileName;
            $galeri->save();
            return redirect()->route('admin.galeri.list');
        }
        else{
            $galeri->image_description = $request->deskripsi_gambar;
            $galeri->save();
            return redirect()->route('admin.galeri.list');
        }
    }

    function delete(Request $request){
        $galeri = Galeri::where('id',$request->id)->delete();
        
        return redirect()->route('admin.galeri.list');
    }

    function list(){
        $galeri = Galeri::all();
        return view('admin.Galeri.list', compact(['galeri']));
    }
}
