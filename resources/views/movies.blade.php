<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARD MOVIES</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container-max">
            <div class="container-card">
                @foreach ($movies as $movie)
                <div class="card">
                    <div>{{$movie->title}}</div>
                    <div>{{$movie->original_title}}</div>
                    <div>{{$movie->nationality}}</div>
                    <div>{{$movie->date}}</div>
                    <div>{{$movie->vote}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        
    </body>
</html>









 {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
