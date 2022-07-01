@extends('layout.crud')

@section('content')

<div class="container">
  <form action="{{ route('beers.update', $beer) }}" method="POST">
    @csrf

    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nome Birra</label>
      <input value="{{$beer->name}}" type="text" name="name" class="form-control" id="name">
    </div>

    <div class="mb-3">
        <label for="company" class="form-label">Company</label>
        <input value="{{$beer->company}}" type="text" name="company" class="form-control" id="company">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">type</label>
        <input value="{{$beer->type}}" type="text" name="type" class="form-control" id="type">
    </div>

    <div class="mb-3">
        <label for="alcohol_content" class="form-label">alcohol content</label>
        <input value="{{$beer->alcohol_content}}" type="number" name="alcohol_content" class="form-control" id="alcohol_content">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label"> description</label>
        <textarea  name="description" class="form-control" id="description"> {{$beer->description}} </textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">image</label>
        <input value="{{$beer->image}}" type="text" name="image" class="form-control" id="image">
    </div>

    <div class="mb-3">
        <label for="hops" class="form-label">hops</label>
        <input value="{{$beer->hops}}" type="number" name="hops" class="form-control" id="hops">
    </div>

    <div class="mb-3">

        <p>Gluten free:</p>

        <label for="gluteen_free" class="form-label">gluteen free</label>
        <input type="radio" value="1" {{$beer->gluteen_free ? 'checked' : ''}} name="gluteen_free" id="gluteen_free">

        <label for="no_gluteen_free" class="form-label">no gluteen free</label>
        <input type="radio" value="0" {{!$beer->gluteen_free ? 'checked' : ''}} name="gluteen_free" id="no_gluteen_free">
    </div>


    <button type="submit" class="btn btn-primary">Invia</button>
</form>
</div>
@endsection