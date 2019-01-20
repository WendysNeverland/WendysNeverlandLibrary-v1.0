@extends('admin/layout')

@section('content')
<h1>Authors</h1>
<ul>
    @foreach ($authors as $author)
        <li>
            <a href="/author/{{$author->id}}">{{$author->firstname}} {{$author->tussenvoegsel}} {{$author->lastname}}</a>
        </li>
    @endforeach
</ul>

@endsection
