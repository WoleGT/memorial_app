 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <style>
         img{
            border-radius: 50px;
            padding: 15px
         }
        
    </style>

 <body style="background-color: #E1E2E4">
    
 </body>
 </html>
 <img src="{{url('profile_pic.jpeg')}}" width="200" height="200" class="img-fluid" image alt="Image"/>
 <marquee direction="down" scrollamount="2px" height="30px" style="text-align:center;">In Loving Memory of:</marquee>
 <a style="font-weight:bolder; font-size:35px;"><span style="font-size:25px">Elder Oluwole Akanni</span> <br>George-Taylor</a>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a>
 


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
