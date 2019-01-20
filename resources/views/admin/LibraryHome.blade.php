@extends('admin/layout')

@section('content')
<h1>Welcome to Neverland</h1>
<h2>
    <ul>
        <li><a href="author">Authors</a></li>
        <li><a href="author/create">Add Author</a></li>
        <li><a href="book">Books</a></li>
        <li><a href="book/create">Add Book</a></li>
        <li><a href="audiobook">Audiobooks</a></li>
        <li><a href="audiobook/create">Add Audiobook</a></li>
        <li><a href="genre">Genres</a></li>
        <li><a href="genre/create">Add Genre</a></li>
        <li><a href="narrator">Narrator</a></li>
        <li><a href="narrator/create">Add Narrator</a></li>
    </ul>
</h2>

@endsection
