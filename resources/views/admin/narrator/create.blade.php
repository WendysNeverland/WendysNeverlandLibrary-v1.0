@extends('admin/layout')

@section('content')
    <h1>Add Narrator</h1>


    <form method="POST" action="/narrator" class="col-sm-4">
        {{csrf_field()}}
        <div class="form-group">
          <label for="narratorFirstname">Firstname</label>
          <input type="text" class="form-control" id="narratorFirstname" placeholder="Firstname" name="firstname">
        </div>
        <div class="form-group">
            <label for="narratorTussenvoegsel">tussenvoegsel</label>
            <input type="text" class="form-control" id="narratorTussenvoegsel" placeholder="tussenvoegsel" name='tussenvoegsel'>
        </div>
        <div class="form-group">
            <label for="narratorLastname">Lastname</label>
            <input type="text" class="form-control" id="narratorLastname" placeholder="Lastname" name='lastname'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
