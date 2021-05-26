@extends('layouts.app')

@section('main')
<main>
  <div id="root" class="container-fluid card-container">
    <!-- stampo tutte le cards con foreach -->
    @foreach ($comics as $comic)
      <div class="cards">
        <h4>{{ $comic->title }}</h4>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>Serie: {{ $comic->series }}</p>
        <p>Genere: {{ $comic->type }}</p>
        <p>Prezzo: {{ $comic->price }} €</p>
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
          Info
        </a>
        <br>
        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
          Modifica
        </a>
        <br>
        <button type="button" name="button">Cancella</button>
      </div>
    @endforeach
  </div>
  <a href="{{ route('comics.create') }}">Crea nuovo fumetto</a>
  <div class="modal" v-if='show'>
    Sicuro di volerlo cancellare?
    <button type="button" name="button">Si</button>
    <button type="button" name="button" @click='dismiss'>No</button>
  </div>
</main>
@endsection
