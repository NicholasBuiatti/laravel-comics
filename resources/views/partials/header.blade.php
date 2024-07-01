<header class="row justify-content-between align-items-center mb-5">
    <div class='col-5'>
        <img id="logo-img" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" />
        <span id="logo-text">Laravel Comic</span>
    </div>

    <nav class="col-4 text-end">
        {{-- METTO LA CLASSE TESTO ROSSO SOLO QUANDO SONO SULLA PAGINA CHE HA IL NOME ROTTA UGUALE AL NOME ROTTA ATTUALE --}}
        <a href="{{ route('Home') }}" class="{{ Route::currentRouteName() == 'Home' ? 'text-danger' : '' }} me-3">HOME</a>
        <a href="/comicBooks" class="{{ Route::currentRouteName() == 'COMIC BOOKS' ? 'text-danger' : '' }} me-3">COMIC
            BOOKS</a>
        <a href="#" class="me-3">FILMS</a>
        <a href="#" class="me-3">CARTOONS</a>
    </nav>
    {{-- <div>
        <p>{{ Route::currentRouteName() }}</p>
    </div> --}}
</header>
