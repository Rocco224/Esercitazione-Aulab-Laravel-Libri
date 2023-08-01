<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    public function books()
    {
        $books = Book::all();

        return view('books-list', compact('books'));
    }

    public function book($id)
    {
        $book = Book::findOrFail($id);
        
        return view('book', compact('book'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid())
        {

            $randomFileName = uniqid('image_'). "." . $request->file('image')->extension();
            $imagePath = $request->file('image')->storeAs('public/images' .$book->id , $randomFileName);
            
            $book->image = $imagePath;

            $book->save();

        }

        return redirect()->route('books.index')->with(['success' => 'Libro aggiunto!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->fill($request->all())->save();
        // $book->update($request->all());

        return redirect()->route('books.index')->with(['success' => 'Libro modificato!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with(['danger' => 'Libro eliminato!']);
    }
}
