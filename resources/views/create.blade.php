<x-main>

    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <a href="{{ route('books.index') }}">
                    <button type="button" class="btn btn-secondary mb-3">Indietro</button>
                </a>

                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label" name="title">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ old('title') }}">
                        @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input class="form-control" type="file" name="image" id="image">
                        @error('image') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di pubblicazione</label>
                        <input type="text" class="form-control" id="year" name="year" placeholder="Inserisci l'anno di pubblicazione del libro" value="{{ old('year') }}">
                        @error('year') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genere</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Inserisci genere" value="{{ old('genre') }}">
                        @error('genre') <span class="small text-danger">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Crea</button>
                </form>

            </div>
        </div>
    </div>

</x-main>