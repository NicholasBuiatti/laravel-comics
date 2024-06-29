<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Comics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <section class="container">
        @include('partials.header')
    </section>
    
    <section class="container">
        <h1 class="text-center text-danger">LARAVEL COMICS</h1>

        {{-- STAMPA DELL'ARRAY CHE HO CREATO IN STORE --}}
        {{-- <pre>{{ print_r($booksList, true) }}</pre> --}}
        <div class="row justify-content-between">
            @foreach ($booksList as $book)
            
                <div class="card mb-3 p-0" style="width: 18rem;">
                    <img src="{{ $book['thumb'] }}" class="card-img-top" style="height: 23rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $book['title'] }}</h5>
                        <p class="card-text overflow-auto" style="height: 23rem;">Descrizione: {{ $book['description'] }}</p>
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
    </section>

    <section class="container">
        @include('partials.footer')
    </section>
    
</body>
</html>