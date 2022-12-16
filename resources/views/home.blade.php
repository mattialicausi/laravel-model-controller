@extends('layout.app')

@section('content')

<div id="carouselExampleInterval carousel" class="carousel slide mycontainer" data-bs-ride="carousel">

    <div class="carousel-inner">

        @forelse ($movies as $movie)

            <div class="carousel-item active" data-bs-interval="3000">
                <img class="d-block" src="{{$movie->image}}" alt="{{$movie->title}}">
            </div>

        @empty
            <p>No Movie</p>
        @endforelse

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <div class=" row">
        @forelse ($movies as $movie)
            <div class="card col-3 g-5">
                <img src="{{$movie->image}}" alt="{{$movie->title}}">
                <h5>{{$movie->title}}</h5>
                <div>Nationality: {{$movie->nationality}}</div>
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
