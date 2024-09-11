{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>{{$title  }}</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Voto</th>
            <th scope="col">Isbn</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($books as $book )
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->vote }}</td>
                    <td>{{ $book->isbn }}</td>
                    {{-- le rotte con parametri accettano come secondo parametro del metodo route() un array associativo con le chivi => valori dei parametri dinamici che dal web.php vengono congfigurati --}}
                    <td><a href="{{ route('bookDetail', ['id' => $book->id]) }}" class="btn btn-warning">vai</a></td>
                </tr>
            @endforeach

        </tbody>
      </table>
</div>

@endsection


@section('titlePage')
    i miei libri
@endsection
