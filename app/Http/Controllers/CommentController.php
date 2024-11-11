<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = $request->validate([
            'content' => 'required',
            'post_id' => 'required|exists:posts,id',
        ]);
        $comment['user_id'] = Auth::id();

        Comment::create($comment);
        return redirect(route('detail-posts', $comment['post_id']));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Comment $comment)
    // {
    //     $data = $request->validate([
    //         'content' => 'required',
    //         'post_id' => 'required|exists:posts',
    //         'user_id' => 'required|exists:users'
    //     ]);

    //     $comment->content = $data['content'];
    //     $comment->post_id = $data['post_id'];
    //     $comment->user_id = $data['user_id'];
    //     $comment->save();

    //     return true;
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return true;
    }
}
