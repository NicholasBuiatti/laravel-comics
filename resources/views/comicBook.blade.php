@extends('layout.app')

@section('cardList')
    <h1 class="text-center text-danger">LARAVEL COMICS</h1>

    {{-- STAMPA DELL'ARRAY CHE HO CREATO IN STORE --}}
    {{-- <pre>{{ print_r($booksList, true) }}</pre> --}}
    <div class="row justify-content-between">
        @foreach ($booksList as $id => $book)
            <div class="card mb-3 p-0" style="width: 18rem;">
                <a href="{{ route('Book details', [$id]) }}">
                    <img src="{{ $book['thumb'] }}" class="card-img-top" style="height: 23rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $book['title'] }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
