 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>

 <style>
         #image1{
            border-radius: 50px;
            padding: 15px
         }

         #image2{
            height: 200px;
            width: 250px;
            border-radius:10px

         }
        
    </style>
 <body style="background-color: #E1E2E4">
 <img src="{{url('profile_pic.jpeg')}}" width="200" height="200" class="img-fluid"  id="image1"  image alt="Image"/>
 <marquee direction="down" scrollamount="2px" height="30px" style="text-align:center;">In Loving Memory of:</marquee>
 <a style="font-weight:bolder; font-size:35px;"><span style="font-size:25px">Elder Oluwole Akanni</span> <br>George-Taylor</a>
    <h3> 13th February 1948 - 17th January 2025</h3>
    <a>77 YEARS OF FULFILLED LIFE</a> 
 


@extends('layouts.master')
@section('content')
    <h2>Upload a photo</h2>
    <form action="{{ route('images.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <input type="text" name="description" placeholder="Image Description">
        <button type="submit">Upload</button>
    </form>
    <br>
    <br>
    @foreach($images as $image)
    <img src="{{ Storage::url($image->path) }}" width="200" id="image2">
    <p>{{ $image->description }}</p>
    <form action="{{ route('images.destroy', $image->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    @endforeach
@endsection

</body>
 </html>






