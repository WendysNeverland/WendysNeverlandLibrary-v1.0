@extends('layout')

@section('content')
<h1>One Book</h1>

<strong>{{$book->title}} {{$book->summary}} {{$book->cover}}</strong>

@endsection
