@extends('layouts.app')

@section('main')
<form class="" action="{{ route('comics.store')}}" method="post">
  @csrf
  @method('POST')
  <input type="text" name="title" value="" placeholder="Inserisci titolo">
  <textarea name="description" value="" placeholder="Inserisci descrizione"></textarea>
  <input type="text" name="thumb" value="" placeholder="Inserisci immagine">
  <input type="number" name="price" value="" placeholder="Inserisci prezzo">
  <input type="text" name="series" value="" placeholder="Inserisci serie">
  <input type="date" name="sale_date" value="" placeholder="Inserisci data di vendita">
  <input type="text" name="type" value="" placeholder="Inserisci genere">
  <input type="submit" name="" value="Invia">
</form>
@endsection
