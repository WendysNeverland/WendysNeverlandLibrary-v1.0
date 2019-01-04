@extends('layout')

@section('content')
<h1>One Audiobook</h1>

<strong>{{ $audioBook->book->title }} <a href = "{{ $audioBook->cover }}">Cover</a></strong>

@endsection
