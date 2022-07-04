@extends('layout.crud')

@section('content')

    <div class="container">

        @if ($errors->any())
            <div class="row">
                <div class="col-8 offset-2 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="col-8 offset-2">

                <h2>Crea una nuova birra</h2>

                <form action="{{ route('beers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome Birra*</label>
                      <input
                        type="text"
                        name="name"
                        class="form-control @error("name")
                            is-invalid
                        @enderror"
                        id="name">
                        @error("name")
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Company*</label>
                        <input
                            type="text"
                            name="company"
                            class="form-control @error("company") is-invalid @enderror"
                            id="company">
                            @error("company")
                                <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">type*</label>
                        <input
                            type="text"
                            name="type"
                            class="form-control @error("type") is-invalid @enderror"
                            id="type">
                            @error("type")
                                <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alcohol_content" class="form-label">alcohol content*</label>
                        <input
                            type="number"
                            name="alcohol_content"
                            class="form-control @error("company") is-invalid @enderror"
                            id="alcohol_content">
                            @error("alcohol_content")
                                <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"> description*</label>
                        <textarea
                            name="description"
                            class="form-control @error("company") is-invalid @enderror"
                            id="description">
                        </textarea>
                        @error("description")
                            <p>{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="text" name="image" class="form-control" id="image">
                    </div>

                    <div class="mb-3">
                        <label for="hops" class="form-label">hops</label>
                        <input
                            value="0"
                            type="number"
                            name="hops"
                            class="form-control @error("hops") is-invalid @enderror"
                            id="hops">
                            @error("hops")
                                <p>{{$message}}</p>
                            @enderror
                    </div>

                    <div class="mb-3">

                        <p>Gluten free:</p>

                        <label for="gluteen_free" class="form-label">gluteen free</label>
                        <input type="radio" value="1" name="gluteen_free" id="gluteen_free">

                        <label for="no_gluteen_free" class="form-label">no gluteen free</label>
                        <input type="radio" value="0" checked name="gluteen_free" id="no_gluteen_free">
                    </div>


                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>

            </div>
        </div>


    </div>

@endsection
