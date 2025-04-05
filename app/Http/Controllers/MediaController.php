<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;

class MediaController extends Controller
{
    public function imageIndex()
    {
        $images = Media::where('type', 'image', 'description')->get();
        return view('media.images', compact('images'));
    }

    public function videoIndex()
    {
        $videos = Media::where('type', 'video', 'description')->get();
        return view('media.videos', compact('videos'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate(['file' => 'required|image|max:2048']);
        $path = $request->file('file')->store('images', 'public');
        Media::create(['path' => $path, 'type' => 'image', 'description' => $request->input('description', '')]);
        return back()->with('success', 'Image uploaded successfully!');
    }

    public function uploadVideo(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:mp4,mov,avi|max:102400', // 100MB limit
        'description' => 'nullable|string'
    ]);

    if ($request->hasFile('file')) {
        $path = $request->file('file')->store('videos', 'public');
        Media::create([
            'path' => $path,
            'type' => 'video',
            'description' => $request->input('description', ''),
        ]);

        return response()->json(['message' => 'Video uploaded successfully!']);
    }

    return response()->json(['message' => 'Video upload failed!'], 400);
}
    

    public function destroyImage(Media $image)
{
    // Delete image from storage
    Storage::disk('public')->delete($image->path);
    $image->delete();
    
    return back()->with('success', 'Image deleted successfully!');
}


public function deleteVideo($id)
{
    $video = Media::findOrFail($id);

    // Delete file from storage
    Storage::disk('public')->delete($video->path);

    // Delete from database
    $video->delete();

    return back()->with('success', 'Video deleted successfully!');
}

}

