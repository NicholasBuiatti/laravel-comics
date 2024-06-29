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

        <ul>
            <li><a href="/comicBooks">ComicBooks</a>
                <ul>
                    @foreach ($booksList as $book)
                        <li>{{ $book['title'] }}</li>
                    @endforeach
                </ul>
            </li>
            <li><a href="#">Films</a></li>
            <li><a href="#">Cartoons</a></li>
        </ul>
        
    </section>

    <section class="container">
        @include('partials.footer')
    </section>
    
</body>
</html>