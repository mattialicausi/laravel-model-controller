@extends('layout.app')

@section('content')

    <h1>Movie page</h1>

    <div class="mycontainer row">
        @forelse ($movies as $movie)
            <div class="card col-3">
                <img src="{{$movie->image}}" alt="{{$movie->title}}">
                <h5>{{$movie->title}}</h5>
                <div>{{$movie->nationality}}</div>
                <div>{{$movie->date}}</div>
                <div>Vote: {{$movie->vote}}</div>

            </div>

        @empty
            <p>No Movie</p>
        @endforelse
    </div>

@endsection



{{-- "id" => 1
        "title" => "Il Padrino"
        "original_title" => "The Godfather"
        "nationality" => "american"
        "date" => "1972-03-24"
        "vote" => 9.2
        "image" => --}}
