@extends('layout')

@section('content')
<h1>Books</h1>
<ul>
    @foreach ($books as $book)
        <li>
            <a href="/book/{{$book->id}}">{{$book->title}} {{$book->summary}} {{$book->cover}}</a>
        </li>
    @endforeach
</ul>

@endsection
