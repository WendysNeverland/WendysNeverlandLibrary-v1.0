<?php

namespace App\Http\Controllers;

use App\AudioBook;
use App\Book;
use App\Narrator;
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
        return view('admin/audiobook/index', compact('audioBooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::get();
        $narrators = Narrator::get();
        return view('admin/audiobook/create', compact('books', 'narrators'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $audioBook = Audiobook::create(request(['book_id','cover']));
        $narrators = request('narrators');//link naar de geselecteerde narrators in de create.blade

        foreach ($narrators as $narratorsId) {
            $narrator = Narrator::where('id', $narratorsId)->first(); //bij first krijg je model terug
            $narrator->audioBooks()->attach($audioBook->id);//attach zet gegevens in de tussentabel
        }

        $audioBook->cover = $request->file('cover')->store('img\audiobookCover','public');
        $audioBook->save();

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
        return view('admin/audiobook/show', compact('audioBook'));
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
