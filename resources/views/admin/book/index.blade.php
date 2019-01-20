@extends('admin/layout')

@section('content')
<h1>Books</h1>
<ul>
    @foreach ($books as $book)
        <li>
            <a href="/book/{{$book->id}}">
                {{$book->title}}<br>
                {{$book->summary}}<br>
                {{$book->cover}}<br>
                {{$book->genre['genre']}}
            </a>
        </li>
    @endforeach
</ul>

@endsection
