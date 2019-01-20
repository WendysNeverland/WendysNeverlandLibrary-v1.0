@extends('admin/layout')

@section('content')
    <h1>Add Book</h1>


    <form method="POST" action="/book" enctype="multipart/form-data" class="col-sm-4">
        {{csrf_field()}}
        <div class="form-group">
          <label for="bookTitle">Title</label>
          <input type="text" class="form-control" id="bookTitle" placeholder="title" name="title">
        </div>
        <div class="form-group">
            <label for="bookSummary">Summary</label>
            <input type="text" class="form-control" id="bookSummary" placeholder="summary" name='summary'>
        </div>
        <div class="form-group">
            <label for="bookCover">Cover</label>
            <input type="file" accept="image/*" class="form-control" id="bookCover" placeholder="cover" name='cover'>
        </div>
        <div class="form-group">
            <label for="bookGenre">Genre</label>
            <select class="form-control" id="bookGenre" name='genre'>
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->genre}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="authorBook">Author(s)</label>
            <select multiple="multiple" class="form-control" id="authorBook" name="authors[]">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->firstname}} {{$author->tussenvoegsel}} {{$author->lastname}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
