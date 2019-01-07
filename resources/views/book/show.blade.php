@extends('layout')

@section('content')
<h1>One Book</h1>

<strong>{{$book->title}} {{$book->summary}} {{$book->cover}}</strong>
<h2>Authors</h2>
@foreach ($book->authors as $author)
    <p>{{$author->firstname}} {{$author->tussenvoegsel}} {{$author->lastname}}</p>
@endforeach
@endsection
