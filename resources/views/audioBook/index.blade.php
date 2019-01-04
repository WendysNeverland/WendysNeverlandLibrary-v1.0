@extends('layout')

@section('content')
<h1>Audiobooks</h1>
<ul>
    @foreach ($audioBooks as $audioBook)
        <li>
            <a href="/audiobook/{{$audioBook->id}}">{{$audioBook->book->title}} {{$audioBook->cover}}</a>
        </li>
    @endforeach
</ul>

@endsection
