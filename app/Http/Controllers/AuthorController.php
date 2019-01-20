<?php

namespace App\Http\Controllers;

use App\author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::get();
        return view('admin/author/index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/author/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Author::create(request(['firstname','tussenvoegsel','lastname']));

        // $author = new Author;

        // $author->firstname = request('firstname');
        // $author->tussenvoegsel = request('tussenvoegsel');
        // $author->lastname = request('lastname');

        // $author->save();

        return redirect('author');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view('admin/author/show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(author $author)
    {
        //
    }
}
