<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CARD MOVIES</title>
        @vite('resources/js/app.js')
    </head>
    <body>
      <div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
                    <p class="card-text">Nationality: {{$movie->nationality}}</p>
                    <p class="card-text">Date: {{$movie->date}}</p>
                    <p class="card-text">Vote: {{$movie->vote}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>









 {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
