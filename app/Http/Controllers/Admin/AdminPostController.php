<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Post;

class AdminPostController extends Controller
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
        $post = Post::find($request->id);
        if(isset($request->post_content) && !isset($request->post_content)){
            $request->validate([
                'post_content' => 'string'
            ]);

            $post->post_content = $request->post_content;
            $post->save();
            return redirect(url()->previous());
        }else if(!isset($request->post_content) && isset($request->post_content)){
            $request->validate([
                'post_title' => 'string'
            ]);

            $post->post_title = $request->post_title;
            $post->save();
            return redirect(url()->previous());
        }else{
            $request->validate([
                'post_title' => 'string',
                'post_content' => 'string'
            ]);

            $post->post_title = $request->post_title;
            $post->post_content = $request->post_content;
            $post->save();
            return redirect()->route('admin.halaman.list');
        }
    }

    function showEditForm($id){
        $post = Post::where('id', $id)->first();
        return view('admin.Post.edit', compact(['post']));
    }

    function list(){
        $halaman = Post::all();
        return view('admin.halaman', compact(['halaman']));
    }
}
