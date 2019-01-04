@extends('layout')

@section('content')
<h1>One Audiobook</h1>
<strong>{{ $book->title }} <a href = "{{ $audioBook->cover }}">Cover</a></strong>

@endsection
