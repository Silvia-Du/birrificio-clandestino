@extends('layout.crud')

@section('content')
   <div class="container">

    @if(session('prodotto_cancellato'))
        <div class="alert alert-success">
            {{ session('prodotto_cancellato') }}
        </div>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Option</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($beers as $beer)


         <tr>
            <th scope="row">{{ $beer->id }}</th>
            <td>{{ $beer->name }}</td>
            <td>
                <a class="btn btn-primary" href="  {{ route('beers.show', $beer) }}">Show</a>
                <a class="btn btn-success" href="{{ route('beers.edit', $beer) }}">Edit</a>
                <form class="d-inline" action="{{ route('beers.destroy', $beer) }}" method="POST" onsubmit="return confirm('Confermi di voler eliminare {{ $beer->name }} ?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </td>

          </tr>
         @endforeach

        </tbody>
      </table>
   </div>
@endsection
