@extends('admin/layout')

@section('content')
    <h1>Add Author</h1>


    <form method="POST" action="/author" class="col-sm-4">
        {{csrf_field()}}
        <div class="form-group">
          <label for="authorFirstname">Firstname</label>
          <input type="text" class="form-control" id="authorFirstname" placeholder="Firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="authorTussenvoegsel">tussenvoegsel</label>
            <input type="text" class="form-control" id="authorTussenvoegsel" placeholder="tussenvoegsel" name='tussenvoegsel'>
        </div>
        <div class="form-group">
            <label for="authorLastname">Lastname</label>
            <input type="text" class="form-control" id="authorLastname" placeholder="Lastname" name='lastname'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
