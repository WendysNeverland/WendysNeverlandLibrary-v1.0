@extends('layout')

@section('content')
    <h1>Add Book</h1>


    <form method="POST" action="/author" class="col-sm-4">
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
            <input type="text" class="form-control" id="bookCover" placeholder="cover" name='cover'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
