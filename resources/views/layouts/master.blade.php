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
</style>
<body>
    <header style=padding-top:20px>
        <nav>
            <a href="{{ route('memorial.index') }}" style="text-decoration:none">Biography</a> |
            <a href="{{ route('comments.index') }}" style="text-decoration:none">Tributes</a>  |
            <a href="{{ route('images.index') }}" style="text-decoration:none">Photos</a> |
            <a href="{{ route('videos.index') }}" style="text-decoration:none">Videos</a> |
            <a href="{{ route('rsvp.index') }}" style="text-decoration:none">RSVP</a>
           
        </nav>
        
    </header>

    <main>
        @yield('content')
    </main>
    <br>
    <br>
    <footer>
        <a>&copy;{{ date('Y') }} Oluwole George-Taylor Snr. Memorial</a><br>
        <a>site developed by: <a href="https://wolegt.vercel.app/">wolegtconsulting.dev</a></a>
    </footer>
</body>
</html>
