@extends('layout')

@section('content')
    <h1>One Audiobook</h1>

    <strong>{{ $audioBook->book->title }}</strong> <br> <img src = "{{ $audioBook->cover }}">
    @foreach ($audioBook->narrators as $narrator)
        <p>{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</p>
    @endforeach

@endsection
