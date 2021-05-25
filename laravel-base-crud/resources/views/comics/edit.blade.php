@extends('layouts.app')

@section('main')
<form class="" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="put">
  @csrf
  @method('PUT')
  <input type="text" name="title" value="{{ $comic->title }}" placeholder="Inserisci titolo">
  <textarea name="description" placeholder="Inserisci descrizione">{{ $comic->description }}</textarea>
  <input type="text" name="thumb" value="{{ $comic->thumb }}" placeholder="Inserisci immagine">
  <input type="number" name="price" value="{{ $comic->price }}" placeholder="Inserisci prezzo">
  <input type="text" name="series" value="{{ $comic->series }}" placeholder="Inserisci serie">
  <input type="date" name="sale_date" value="{{ $comic->sale_date }}" placeholder="Inserisci data di vendita">
  <input type="text" name="type" value="{{ $comic->type }}" placeholder="Inserisci genere">
  <input type="submit" name="" value="Modifica">
</form>
@endsection
