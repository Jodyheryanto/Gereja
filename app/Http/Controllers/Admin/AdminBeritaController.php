<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Redirect,Response,File;
use Illuminate\Routing\UrlGenerator;
use App\Providers\RouteServiceProvider;
use DB;
use App\News;

class AdminBeritaController extends Controller
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
        return view('admin.Berita.create');
    }

    public function create(Request $request)
	{

        // var_dump($request->judul . ' '. $request->deskripsi .' '. $request->gambar);die;
		$request->validate([
			'judul' => 'required',
			'gambar' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);
        if ($files = $request->file('gambar')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('gambar');
            $resorce->move("images/berita", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            // insert data ke table books
            News::insert([
                'news_title' => $request->judul,
                'news_description' => $request->news_deskripsi,
                'news_image' => $fileName
            ]);
            // alihkan halaman tambah buku ke halaman books
            return redirect()->route('admin.berita.list');
        }
        // ->with('success', 'Course successfully created!');
    }
    
    function showEditForm($id){
        $berita = News::where('id', $id)->first();
        return view('admin.Berita.edit', compact(['berita']));
    }

    public function update(Request $request)
	{
        $berita = News::find($request->id);
        $request->validate([
            'judul' => 'string'
        ]);
        if ($files = $request->file('gambar')) {
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('gambar');
            $resorce->move("images/berita", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());
            $berita->news_title = $request->judul;
            $berita->news_description = $request->news_deskripsi;
            $berita->news_image = $fileName;
            $berita->save();
            return redirect()->route('admin.berita.list');
        }
        else{
            $berita->news_title = $request->judul;
            $berita->news_description = $request->news_deskripsi;
            $berita->save();
            return redirect()->route('admin.berita.list');
        }
    }

    function delete(Request $request){
        $berita = News::where('id',$request->id)->delete();
        
        return redirect()->route('admin.berita.list');
    }
}
