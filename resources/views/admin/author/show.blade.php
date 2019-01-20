@extends('admin/layout')

@section('content')
<h1>One Author</h1>

<strong>{{$author->firstname}} {{$author->tussenvoegsel}} {{$author->lastname}}</strong>

@endsection
