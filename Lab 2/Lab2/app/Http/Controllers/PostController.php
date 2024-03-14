<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post as Post;

class PostController extends Controller
{
    public function index(){
    $posts=Post::all();
    return view('index',['posts'=>$posts]);
    }

    public function create(){
        return view('create');
    }

    public function show($id){
        $post=Post::find($id);
        return view('show',['post'=>$post]);
    }

    public function view_trash(){
        $posts=Post::onlyTrashed()->get();
        return view('trash',['posts'=>$posts]);
    }

    public function edit($id){
        $post=Post::find($id);
        return view('edit',['post'=>$post]);
    }
//     public function store(Request $request){
//         $post=new Post;
//         $post->title=$request->title;
//         $post->body=$request->body;
//         $post->published_at=$request->published_at;
//         $post->save();
//         return $post;
//     }
//     public function update(Request $request,$id){
//         $post=Post::find($id);
//         $post->title=$request->title;
//         $post->body=$request->body;
//         $post->published_at=$request->published_at;
//         $post->save();
//         return $post;
    // }
    public function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return $post;
}
}
?>
