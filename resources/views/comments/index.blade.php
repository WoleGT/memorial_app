 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oluwole George-Taylor Snr Memorial</title>
    <meta name="Keyword" Content="Web App Development, Software Development">
    <meta name="Keyword" Description="Website Development, Custom Website Solutions">
    <meta name="Keyword" Author="wolegtconsulting.dev">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
    <link rel="icon" href="{{asset('profile_pic.jpeg')}}">
 </head>
 <body style="background-color: #E1E2E4">
    
@extends('layouts.master')

@section('content')
    <h2>Submit a Tribute</h3>

    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="text" name="guest_name" required placeholder="Your Name">
        <textarea name="content" required placeholder="Write a comment..." rows="3"></textarea>
        <input type="text" name="relationship" placeholder="Your Relationship (e.g., Son, Friend, Colleague)">
        <button type="submit">Submit</button>
    </form>

    @foreach($comments as $comment)
        <p>
        <strong>{{ $comment->guest_name }} ({{ $comment->relationship ?? 'Unknown' }}):</strong> 
        {{ $comment->content }}
        <br>
        <small>
            Posted on: 
            {{ $comment->commented_at ? \Carbon\Carbon::parse($comment->commented_at)->format('F j, Y, g:i A') : 'No date available' }}
        </small>
        </p>
        <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    @endforeach
@endsection

</body>
</html>
 
