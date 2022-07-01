@extends('layout.crud')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-6 debug">
                <h2>Nome: {{ $beer->name }}</h2>
                <h4>Compagnia: {{ $beer->company }}</h4>
                <h4>Type: {{ $beer->type }}</h4>
                <h4>Alchol: {{ $beer->alcohol_content }}&percnt;</h4>
                <p>{!! $beer->description !!}</p>
                <p>Luppoli: {{ $beer->hops }}</p>


                <p>{{ $beer->gluteen_free ? 'Birra gluten free': 'Birra con glutine' }}</p>

                <a href="{{ route('beers.index') }}" type="button" class="btn btn-primary">Back to list</a>
                <a href="{{ route('beers.edit', $beer) }}" type="button" class="btn btn-warning">edit</a>
            </div>
            <div class="col-6 debug">
                <img class="img-fluid" src="{{ $beer->image}}" alt="{{ $beer->name }}">
            </div>

        </div>
    </div>

@endsection
