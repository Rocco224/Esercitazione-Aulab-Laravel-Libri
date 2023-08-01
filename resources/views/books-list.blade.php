<x-main>

    <div class="container my-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($books as $book)
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="{{ Storage::url($book->image) }}" class="card-img-top h-100" alt="...">
                    <div class="card-body">
                        <a href="{{ route('book', $book->id) }}">
                            <p class="card-text">Scopri di piu'</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-main>