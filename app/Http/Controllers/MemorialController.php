<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    public function index()
    {
        $comments = Comment::all(); // Fetch all comments
        return view('memorial.index', compact('comments'));
    }
    
}

