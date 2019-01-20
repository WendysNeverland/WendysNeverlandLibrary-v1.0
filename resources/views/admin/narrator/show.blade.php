@extends('admin/layout')

@section('content')
<h1>One Narrator</h1>

<strong>{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</strong>

@endsection
