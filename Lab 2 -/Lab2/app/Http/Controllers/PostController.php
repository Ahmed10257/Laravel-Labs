<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post as Post;
use App\Models\User as User;
use Carbon\Carbon as Carbon;
use App\Http\Requests\StoreRequest as StoreRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
    $posts=Post::paginate();
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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:30'],

            'body' => ['required', 'max:255'],
            'published' => ['required', 'boolean']]);
        $data['published_at']=Carbon::now();
        $data['user_id']=Auth::id();
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|max:255|min:15',
        //     'body' => 'required',
        // ]);
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
}

    public function show_users(){
        $users=User::all();
        $posts=Post::all();
        return view('users',['users'=>$users,'posts'=>$posts]);
    }
}
?>
