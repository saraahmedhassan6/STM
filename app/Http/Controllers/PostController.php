<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        $posts=Post::all();
            return view("post.posts",compact('posts'));

    }
    public function create()
    {
        return view("post.create");
    }
    public function show($id)
    {
        $posts=Post::find($id);
        return view("post.show",compact('posts'));

    }
    public function store(PostRequest $request)
    {
       
        Post::create([
            'title'=>$request->title,
            'descr'=>$request->descr,
            'user_id'=>Auth::id(),
        ]);
        
        return redirect('/posts');
    }
    public function edit($id)
    {
        $posts=Post::find($id);
        return view("post.edit",compact('posts'));
    }
    public function update(PostRequest $request,$id)
    {
        $posts=Post::find($id);
        $posts->update([
            'title' => $request->input('title'),
            'descr' => $request->input('descr'),
            
        ]);

        return redirect('/posts');
    }
    public function destroy($id)
    {
        Post::destroy($id);

        return redirect('/posts');
        
    }
}
