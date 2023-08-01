<x-main>

    <div class="container mt-5">
        <div class="row">
            <div class="col">

                <div class="d-flex justify-content-between">
                    <h1>Lista libri</h1>
                    <a href="{{ route('books.create') }}">
                        <button type="button" class="btn btn-sm btn-success">Aggiungi</button>
                    </a>
                </div>


                <table class="table mt-4">

                    <x-message />

                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Pubblicazione</th>
                            <th scope="col">Genere</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->genre }}</td>
                            <td class="text-end">
                                <a href="{{ route('books.edit', $book) }}"><button type="button" class="btn btn-sm btn-primary">Modifica</button></a>
                                <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline ms-2" onsubmit="return confirm('Stai per eliminare il libro! Sei sicuro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Elimina</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-main>