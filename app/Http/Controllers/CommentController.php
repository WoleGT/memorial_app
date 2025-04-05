<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'content' => 'required|string',
            'relationship' => 'nullable|string|max:255',
        ]);

        Comment::create([
            'guest_name' => $request->guest_name,
            'content' => $request->content,
            'relationship' => $request->relationship,
            'commented_at' => now(), // Save current timestamp
        ]);


        return back()->with('success', 'Comment added!');
    }

    public function destroy(Comment $comment)
{
    $comment->delete();
    return back()->with('success', 'Comment deleted successfully!');
}
}



