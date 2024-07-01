@extends('layout.app')

@section('cardList')
    {{-- SE ESISTE L'ARRAY COMIC STAMPO I SUOI DETTAGLI --}}
    @if (isset($comic))
        <h1 class="text-center text-danger">{{ $comic['title'] }}</h1>

        <p>{{ $comic['description'] }}</p>
        <p>{{ $comic['price'] }}</p>
        <p>{{ $comic['series'] }}</p>
        <p>{{ $comic['sale_date'] }}</p>
        <p>{{ $comic['type'] }}</p>
        </div>
    @else
        {{-- SE NON ESISTE L'ARRAY COMIC STAMPO L'ARRAY ERRORE --}}
        <h1 class="text-danger text-center">{{ $errore }}</h1>
    @endif
@endsection
