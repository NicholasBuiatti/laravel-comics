<div class="card mb-3 p-0" style="width: 18rem;">
    <a href="{{ route('Book details', [$id]) }}">
        <img src="{{ $book['thumb'] }}" class="card-img-top" style="height: 23rem;">
        <div class="card-body">
            <h5 class="card-title">Titolo: {{ $book['title'] }}</h5>
        </div>
    </a>
</div>
