<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }
    public function create(Post $post)
    {
        return view('posts.create', ['post'=>$post]);
    }
    public function store()
    {
        return;
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post'=>$post]);
    }
    public function update(Post $post)
    {
        return;
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
