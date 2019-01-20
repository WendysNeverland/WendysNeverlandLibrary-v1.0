<?php

namespace App\Http\Controllers;

use App\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::get();
        return view('admin/genre/index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/genre/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Genre::create(request(['genre']));
        return redirect('genre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(genre $genre)
    {
        return view('admin/genre/show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, genre $genre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(genre $genre)
    {
        //
    }
}
