<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|max:50',
            'body' => 'required'
        ]);
        Post::create(request(['title','body']));
        return redirect('/');
    }

    public function create() {
        return view('posts.create');
    }

    public function show() {
        $posts = Post::allPost();
        return view('posts.posts', compact('posts'));
    }

    public function showPost($title) {
        $post = Post::where('title',$title)->first();
        if ($post == null) {
            throw new ModelNotFoundException();
        }
        return view('posts.post',compact('post'));
    }
}