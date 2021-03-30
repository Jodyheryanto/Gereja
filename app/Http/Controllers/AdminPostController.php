<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use DB;
use App\Post;

class AdminPostController extends Controller
{
    public function update(Request $request)
	{
        $post = Post::find($request->id);
        // var_dump(isset($request->post_content) && !isset($request->post_title));die;
        if(isset($request->post_content) && !isset($request->post_title) && !isset($request->post_link) && !isset($request->post_link2)){
            $request->validate([
                'post_content' => 'string'
            ]);

            $post->post_content = $request->post_content;
            $post->save();
            return redirect(url()->previous());
        }else if(!isset($request->post_content) && isset($request->post_title) && !isset($request->post_link) && !isset($request->post_link2)){
            $request->validate([
                'post_title' => 'string'
            ]);

            $post->post_title = $request->post_title;
            $post->save();
            return redirect(url()->previous());
        }else if(!isset($request->post_content) && !isset($request->post_title) && isset($request->post_link) && !isset($request->post_link2)){
            $request->validate([
                'post_link' => 'string'
            ]);
            if(str_contains($request->post_link, 'youtube') === true){
                $link = str_replace("/watch?v=", "/embed/", $request->post_link);
                $link = $link . "?rel=0";
                $post->link = $link;
            }else{
                $post->link = $request->post_link;
            }
            $post->save();
            return redirect(url()->previous());
        }else if(!isset($request->post_content) && !isset($request->post_title) && !isset($request->post_link) && isset($request->post_link2)){
            $request->validate([
                'post_link2' => 'string'
            ]);
            if(str_contains($request->post_link2, 'youtube') === true){
                $link = str_replace("/watch?v=", "/embed/", $request->post_link2);
                $link = $link . "?rel=0";
                $post->link2 = $link;
            }else{
                $post->link2 = $request->post_link;
            }
            $post->save();
            return redirect(url()->previous());
        }else{
            $request->validate([
                'post_title' => 'string',
                'post_content' => 'string',
                'post_link' => 'string',
                'post_link2' => 'string'
            ]);

            $post->post_title = $request->post_title;
            $post->post_content = $request->post_content;
            $post->link = $request->post_link;
            $post->link2 = $request->post_link2;
            $post->save();
            return redirect()->route('admin.halaman.list');
        }
    }

    function showEditForm($id){
        $post = Post::where('id', $id)->first();
        return view('admin.Post.edit', compact(['post']));
    }
}
