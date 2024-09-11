{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1>{{ $book->title }}</h1>

    <p>
        {{ $book->plot }}
    </p>
</div>

@endsection


@section('titlePage')
    {{ $book->title }}
@endsection
