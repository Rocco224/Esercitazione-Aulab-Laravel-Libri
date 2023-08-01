<x-main>

    <div class="container mt-4 d-flex justify-content-center">
        <div class="row justify-content-center">
            <div class="col-6">

                <div class="card shadow mb-3">
                    <img src="{{ Storage::url($book->image) }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text"><small class="text-body-secondary">{{ $book->genre }} - {{ $book->year }}</small></p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-main>