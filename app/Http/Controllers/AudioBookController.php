<?php

namespace App\Http\Controllers;

use App\AudioBook;
use App\Book;
use Illuminate\Http\Request;

class AudioBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audioBooks = AudioBook::with(['book', 'narrators'])->get();
        return view('audiobook/index', compact('audioBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::get();
        return view('audiobook/create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Audiobook::create(request(['book_id','cover']));
        return redirect('audiobook');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audio_book  $audio_book
     * @return \Illuminate\Http\Response
     */
    public function show(AudioBook $audioBook)
    {
        return view('audiobook/show', compact('audioBook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audio_book  $audio_book
     * @return \Illuminate\Http\Response
     */
    public function edit(audio_book $audio_book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audio_book  $audio_book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audio_book $audio_book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audio_book  $audio_book
     * @return \Illuminate\Http\Response
     */
    public function destroy(audio_book $audio_book)
    {
        //
    }
}
