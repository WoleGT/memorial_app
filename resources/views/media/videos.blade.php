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

 <style>
         video{
            border-radius: 50px;
         }     
 </style>
 <body style="background-color: #E1E2E4">
 
    @extends('layouts.master')

    @section('content')
    <h2>Upload a video</h2>

    <form id="uploadForm" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="videoFile" required>
        <input type="text" name="description" id="description" placeholder="Video Description">
        <button type="submit">Upload</button>
    </form>

    <!-- Progress Bar -->
    <div id="progressContainer" style="display: none; margin-top: 20px;">
        <progress id="progressBar" value="0" max="100" style="width: 100%;"></progress>
        <p id="progressText">Uploading... 0%</p>
    </div>

    <div id="uploadStatus"></div>

    <!-- <h2>Uploaded Videos</h2> -->
    @foreach($videos as $video)
        <video width="320" height="240" controls>
            <source src="{{ asset('storage/' . $video->path) }}" type="video/mp4">
        </video>
        <p>{{ $video->description }}</p>
        @auth
            @if(auth()->user()->is_admin)
                <form action="{{ route('videos.delete', $video->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            @endif
        @endauth
    @endforeach

    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
    @else
        <li><a href="{{ route('admin.index') }}">Admin Panel</a></li>
        <li>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </li>
    @endguest
    

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault();

            let formData = new FormData();
            formData.append('file', document.getElementById('videoFile').files[0]);
            formData.append('description', document.getElementById('description').value);
            formData.append('_token', '{{ csrf_token() }}');

            let progressBar = document.getElementById('progressBar');
            let progressContainer = document.getElementById('progressContainer');
            let progressText = document.getElementById('progressText');
            let uploadStatus = document.getElementById('uploadStatus');

            progressContainer.style.display = 'block';

            axios.post('{{ route("videos.upload") }}', formData, {
    headers: {
        'Content-Type': 'multipart/form-data'
    },
    onUploadProgress: function(progressEvent) {
        let percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);
        progressBar.value = percentCompleted;
        progressText.innerText = `Uploading... ${percentCompleted}%`;
    }
})
.then(function(response) {
    uploadStatus.innerHTML = `<p style="color: green;">${response.data.message}</p>`;
    progressText.innerText = "Upload Complete!";
    
    // Reload the page after 2 seconds
    setTimeout(() => {
        location.reload();
    }, 2000);
})
.catch(function(error) {
    uploadStatus.innerHTML = `<p style="color: red;">Upload failed. Please try again.</p>`;
    console.error(error);
});

        });
    </script>
@endsection

</body>
 </html>
