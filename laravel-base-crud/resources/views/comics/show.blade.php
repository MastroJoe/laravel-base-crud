@extends('layouts.app')

@section('main')
<main>
  <div class="container-fluid card-container">
    <!-- stampo le info di una card -->
      <div class="cards">
        <h4>{{ $comic->title }}</h4>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>Serie: {{ $comic->series }}</p>
        <p>Genere: {{ $comic->type }}</p>
        <p>{{ $comic->description }}</p>
        <p>Prezzo: {{ $comic->price }} €</p>
        <p>{{ $comic->sale_date }}</p>
      </div>
  </div>
</main>
@endsection
