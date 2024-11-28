<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    
        public function index(Post $post)
    {
        $comments = $post->comments;

        return response()->json([
            'success' => true,
            'data' => $comments
        ]);
    }

    //lajkovanje komentara
    public function like(Comment $comment)
{
    $comment->likes += 1;
    $comment->save();

    return response()->json([
        'success' => true,
        'message' => 'Comment liked successfully',
        'data' => $comment
    ]);
}


}
