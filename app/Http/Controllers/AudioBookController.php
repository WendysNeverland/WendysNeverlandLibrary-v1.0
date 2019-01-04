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
        $audioBooks = AudioBook::get();
        $books = Book::get();
        return view('audiobook/index', compact(['audioBooks','books']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audio_book  $audio_book
     * @return \Illuminate\Http\Response
     */
    public function show(AudioBook $audioBook)
    {
        $book = $audioBook->book()->get();
        $narrators = $audioBook->narrators()->get();
        return view('audiobook/show', compact(['audioBook', 'book','narrators']));
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
