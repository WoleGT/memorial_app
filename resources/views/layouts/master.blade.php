<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Keyword" Content="Oluwole George-Taylor Snr. Memorial">
    <meta name="Keyword" Description="Oluwole George-Taylor Snr. Memorial">
    <meta name="Keyword" Author="Wolegtconsulting">
    <link ref="icon" scr="{{ url('/img/Profile-Pic.jpg') }}">
    <title>@yield('title', 'Memorial Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
    body{
        text-align: center;
    }
    #a1{
        text-decoration:none;
    }
    #a1:hover{
        text-decoration:underline;

    }
</style>
<body>
    <header style=padding-top:20px>
        <nav>
            <a href="{{ route('memorial.index') }}" id="a1">Biography</a> |
            <a href="{{ route('comments.index') }}" id="a1">Tributes</a>  |
            <a href="{{ route('images.index') }}" id="a1">Photos</a> |
            <a href="{{ route('videos.index') }}" id="a1">Videos</a> |
            <a href="{{ route('rsvp.index') }}" id="a1">RSVP</a>
           
        </nav>
        
    </header>

    <main>
        @yield('content')
    </main>
    <br>
    <br>
    <footer>
        <a>&copy;{{ date('Y') }} Oluwole George-Taylor Snr. Memorial</a><br>
        <a>site developed by: <a href="https://wolegt.vercel.app/" id="a1">wolegtconsulting.dev</a></a>
    </footer>
</body>
</html>
