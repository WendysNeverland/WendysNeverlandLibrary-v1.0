@extends('admin/layout')

@section('content')
<h1>Authors</h1>
<ul>
    @foreach ($genres as $genre)
        <li>
            <a href="/genre/{{$genre->id}}">{{$genre->genre}}</a>
        </li>
    @endforeach
</ul>

@endsection
