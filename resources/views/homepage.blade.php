@extends('layout.app')

@section('cardList')
    <ul>
        <li><a href="{{ route('COMIC BOOKS') }}">ComicBooks</a>
            <ul>
                @foreach ($booksList as $book)
                    <li>{{ $book['title'] }}</li>
                @endforeach
            </ul>
        </li>
        <li><a href="#">Films</a></li>
        <li><a href="#">Cartoons</a></li>
    </ul>
@endsection
