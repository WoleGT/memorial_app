<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        $images = Media::where('type', 'image')->get();
        $videos = Media::where('type', 'video')->get();

        return view('admin.index', compact('comments', 'images', 'videos'));
    }

    public function deleteComment($id)
    {
        Comment::findOrFail($id)->delete();
        return back()->with('success', 'Comment deleted successfully!');
    }

    public function deleteImage($id)
    {
        $image = Media::findOrFail($id);
        Storage::delete('public/' . $image->path);
        $image->delete();
        return back()->with('success', 'Image deleted successfully!');
    }

    public function deleteVideo($id)
    {
        $video = Media::findOrFail($id);
        Storage::delete('public/' . $video->path);
        $video->delete();
        return back()->with('success', 'Video deleted successfully!');
    }

    public function __construct()
{
    // $this->middleware('auth');
}

}

