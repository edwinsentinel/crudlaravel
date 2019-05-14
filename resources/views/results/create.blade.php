@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Create Student
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('results.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Student Name:</label>
              <input type="text" class="form-control" name="student_name"/>
          </div>
          <div class="form-group">
              <label for="price">Student Number:</label>
              <input type="text" class="form-control" name="student_number"/>
          </div>
          <div class="form-group">
              <label for="quantity">Student Marks:</label>
              <input type="text" class="form-control" name="student_marks"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection