@extends('admin/layout')

@section('content')
    <h1>One Audiobook</h1>

    <strong>{{ $audioBook->book->title }}</strong><br>
    <img src = {{('/storage/'.$audioBook->cover)}} style="width:200px; height:auto;"><br>
    @foreach ($audioBook->narrators as $narrator)
        <p>{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</p>
    @endforeach

@endsection
