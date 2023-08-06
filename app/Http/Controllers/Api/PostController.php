<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return PostResource::collection($posts);

    }
    

    public function store(Request $request)
    {
       
        Post::create([
            'title'=>$request->title,
            'descr'=>$request->descr,
            'user_id'=>$request->user_id,
        ]);
        
        return "Created";
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return new PostResource($post);
    }
    public function update(Request $request,$id)
    {
        $posts=Post::find($id);
        $posts->update([
            'title' => $request->input('title'),
            'descr' => $request->input('descr'),
            
        ]);

        return "updated";
    }
    public function destroy($id)
    {
        Post::destroy($id);

        return "deleted";
        
    }
}
