@extends('layouts.master')

@section('content')
    <h1>Admin Panel</h1>

    <h2>Comments</h2>
    @foreach($comments as $comment)
        <p><strong>{{ $comment->guest_name }}:</strong> {{ $comment->content }}</p>
        <form action="{{ route('admin.comment.delete', $comment->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach

    <h2>Images</h2>
    @foreach($images as $image)
        <img src="{{ asset('storage/' . $image->path) }}" width="200">
        <p>{{ $image->description }}</p>
        <form action="{{ route('admin.image.delete', $image->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach

    <h2>Videos</h2>
    @foreach($videos as $video)
        <video width="320" height="240" controls>
            <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
        </video>
        <p>{{ $video->description }}</p>
        <form action="{{ route('admin.video.delete', $video->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
@endsection
