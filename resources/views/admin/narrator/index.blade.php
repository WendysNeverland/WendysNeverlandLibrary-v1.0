@extends('admin/layout')

@section('content')
<h1>Narrator</h1>
<ul>
    @foreach ($narrators as $narrator)
        <li>
            <a href="/narrator/{{$narrator->id}}">{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</a>
        </li>
    @endforeach
</ul>

@endsection
