@extends('layout.crud')

@section('content')
   <div class="container">
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
                <a class="btn btn-success" href="">Edit</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>

          </tr>
         @endforeach

        </tbody>
      </table>
   </div>
@endsection
