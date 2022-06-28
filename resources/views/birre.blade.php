@extends('layout.main')
@section('content')
    <h1>Birre:</h1>
    @foreach ($beers as $beer )

      <h2>{{ $beer->name }}</h2>
      
    @endforeach

@endsection
