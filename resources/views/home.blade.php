<x-main>
    
    <div class="container d-flex justify-content-center text-center">
        <div class="row flex-column">
            <div class="col mx-auto my-4">
                <h1>Books Shop</h1>
                <p>Benvenuto nel nostro sito! Qui troverai migliaia di libri</p>
            </div>                

            <div class="col mx-auto">
                <a href="{{ route('books.list') }}">
                    <button type="button" class="btn btn-outline-info btn-lg">
                        Scopri il nostro catalogo
                    </button>
                </a>
            </div>
        </div>
    </div>

</x-main>