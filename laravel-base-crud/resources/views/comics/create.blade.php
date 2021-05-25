@extends('layouts.app')

@section('main')
<form class="" action="{{ route('comics.store')}}" method="post">
  @csrf
  @method('POST')
  
</form>
@endsection
