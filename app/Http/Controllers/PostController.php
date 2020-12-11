<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showAddPost()
    {
        return view('add-post');
    }

    public function addPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return back()->with('post_created', 'Post has been created');
    }

    public function showPost()
    {
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('posts', compact('posts'));
    }
}
