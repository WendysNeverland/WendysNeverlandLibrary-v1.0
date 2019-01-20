<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use App\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with(['genre','authors'])->get();
        return view('admin/book/index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::get();
        $authors = Author::get();
        return view('admin/book/create', compact('genres','authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::create(request(['title','summary','cover','genre_id']));
        $authors = request('authors');//blokhaken maken er een array van net deze naam als array erin

        foreach ($authors as $authorId) {
            $author = Author::where('id',$authorId)->first();
            $author->books()->attach($book->id);
        }

        $book->cover = $request->file('cover')->store('img\bookCover', 'public');
        $book->save();
        return redirect('book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('admin/book/show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
