@extends('layouts.app')

@section('main')
<main>
  <div class="container-fluid card-container">
    <!-- stampo tutte le cards con foreach -->
    @foreach ($comics as $index => $comic)
      <div class="cards">
        <h4>{{ $comic->title }}</h4>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>Serie: {{ $comic->series }}</p>
        <p>Genere: {{ $comic->type }}</p>
        <p>Prezzo: {{ $comic->price }} €</p>
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
          Info
        </a>
      </div>
    @endforeach
  </div>
</main>
@endsection
