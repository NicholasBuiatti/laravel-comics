@extends('layout.app')

@section('cardList')
    <h1 class="text-center text-danger">LARAVEL COMICS</h1>

    {{-- STAMPA DELL'ARRAY CHE HO CREATO IN STORE --}}
    {{-- <pre>{{ print_r($booksList, true) }}</pre> --}}
    <div class="row justify-content-between">
        @foreach ($booksList as $book)
            <div class="card mb-3 p-0" style="width: 18rem;">
                <img src="{{ $book['thumb'] }}" class="card-img-top" style="height: 23rem;">
                <div class="card-body">
                    <h5 class="card-title">Titolo: {{ $book['title'] }}</h5>
                    <p class="card-text overflow-auto" style="height: 23rem;">Descrizione: {{ $book['description'] }}
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prezzo: {{ $book['price'] }}</li>
                    <li class="list-group-item">Serie: {{ $book['series'] }}</li>
                    <li class="list-group-item">Data di vendita: {{ $book['sale_date'] }}</li>
                    <li class="list-group-item">Genere: {{ $book['type'] }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
