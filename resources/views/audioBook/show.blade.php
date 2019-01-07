@extends('layout')

@section('content')
    <h1>One Audiobook</h1>

    <strong>{{ $audioBook->book->title }} <br> <a href = "{{ $audioBook->cover }}">Cover</a></strong>
    @foreach ($audioBook->narrators as $narrator)
        <p>{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</p>
    @endforeach

@endsection
