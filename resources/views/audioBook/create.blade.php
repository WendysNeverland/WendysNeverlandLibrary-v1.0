@extends('layout')

@section('content')
    <h1>Add Audiobook</h1>


    <form method="POST" action="/audiobook" class="col-sm-4">
        {{csrf_field()}}
        <div class="form-group">
            <label for="bookTitle">Book</label>
            <select class="form-control" id="bookTitle" name='book_id'>
                @foreach ($books as $book)
            <option value="{{$book->id}}">{{$book->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="audioBookCover">Cover</label>
            <input type="text" class="form-control" id="audioBookCover" placeholder="cover" name='cover'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
