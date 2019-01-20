@extends('admin/layout')

@section('content')
<h1>Audiobooks</h1>
<ul>
    @foreach ($audioBooks as $audioBook)
        <li>
        <a href="/audiobook/{{$audioBook->id}}">{{$audioBook->book->title}}</a>
        <p>{{$audioBook->cover}}</p>
        @foreach ($audioBook->narrators as $narrator)
         <p>{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</p>
        @endforeach

        </li>
    @endforeach
</ul>

@endsection
