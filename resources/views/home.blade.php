@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section class="container">
      <h1>FILMS</h1>
      <div class="row">
        @foreach ($movies as $movie)
          <div class="col-2">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">{{ $movie['title'] }}</h3>
                <h5 class="card-title">{{ $movie['original_title'] }}</h5>
                <p class="card-text">{{ $movie['nationality'] }}</p>
                <p class="card-text">{{ $movie['vote'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </section>
@endsection
