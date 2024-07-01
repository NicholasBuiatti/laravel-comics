@extends('layout.app')

@section('cardList')
    <h1 class="text-center text-danger">LARAVEL COMICS</h1>

    {{-- STAMPA DELL'ARRAY CHE HO CREATO IN STORE --}}
    {{-- <pre>{{ print_r($booksList, true) }}</pre> --}}
    <div class="row justify-content-between">
        @foreach ($booksList as $id => $book)
            {{-- I PARTIALS HANNO GIà LE VARIABILI DCHE SI TROVANO QUA DENTRO --}}
            @include('partials.card')
        @endforeach
    </div>
@endsection
