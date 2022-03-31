<?php

namespace App\Http\Controllers\Comments;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create() {
        return view();
    }

    public function store(Request $request, $post_id) {
        $request->validate([
            'comment' => 'required|max:50'
        ]);
        Comment::create([
            'body' => $request['comment'],
            'post_id' => $post_id
        ]);
        return back();
    }
}
