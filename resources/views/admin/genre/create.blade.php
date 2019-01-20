@extends('admin/layout')

@section('content')
    <h1>Add Author</h1>


    <form method="POST" action="/author" class="col-sm-4">
        {{csrf_field()}}
        <div class="form-group">
          <label for="bookGenre">Genre</label>
          <input type="text" class="form-control" id="bookGenre" placeholder="genre" name="firstname">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
