<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Formulir;

class AdminFormulirController extends Controller
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
    public function update(Request $request)
	{
        $formulir = Formulir::find($request->id);
        // var_dump($request->judul_formulir);die;
        $request->validate([
            'judul_formulir' => 'string',
            'data_formulir.*' => 'required|mimes:doc,pdf,docx,zip|max:2048',
            'tata_cara' => 'string'
        ]);

        if ($files = $request->file('data_formulir')) {
            
            //store file into document folder
            // $file = $request->gambar->store('public');
            // var_dump($request->file('gambar')->getRealPath());die;
            $resorce = $request->file('data_formulir');
            $resorce->move("file/formulir", time()."_".$resorce->getClientOriginalName());
            $fileName = preg_replace("/tmp/","", time()."_".$resorce->getClientOriginalName());

            $formulir->judul_formulir = $request->judul_formulir;
            $formulir->data_formulir = $fileName;
            $formulir->tata_cara = $request->tata_cara;
            $formulir->save();
            return redirect()->route('admin.formulir.list');
        }
        else{
            $formulir->judul_formulir = $request->judul_formulir;
            $formulir->tata_cara = $request->tata_cara;
            $formulir->save();
            return redirect()->route('admin.formulir.list');
        }
    }

    function showEditForm($id){
        $formulir = Formulir::where('id', $id)->first();
        return view('admin.Formulir.edit', compact(['formulir']));
    }

    function list(){
        $formulir = Formulir::all();
        return view('admin.Formulir.list', compact(['formulir']));
    }
}
