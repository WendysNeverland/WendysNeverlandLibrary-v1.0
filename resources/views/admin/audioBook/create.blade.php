@extends('admin/layout')

@section('content')
    <h1>Add Audiobook</h1>


    <form method="POST" action="/audiobook" enctype="multipart/form-data" class="col-sm-4">
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
            <label for="narratorAudioBook">Narrator(s)</label>
            <select multiple="multiple" class="form-control" id="narratorAudioBook" name="narrators[]">
                @foreach ($narrators as $narrator)
                    <option value="{{$narrator->id}}">{{$narrator->firstname}} {{$narrator->tussenvoegsel}} {{$narrator->lastname}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="audioBookCover">Cover</label>
            <input type="file" accept="image/*" class="form-control" id="audioBookCover" placeholder="cover" name='cover'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
