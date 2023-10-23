@extends('admin.master')

@section('content')

 
<form action="{{route('subject.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="">Subject Name</label>
    <input type="text" class="form-control" id="" name="subject_name" placeholder="Enter Subject Name">
  </div>

  <div class="form-group">
    <label for="">Class</label>
    <input type="text" class="form-control" id="" name="class" placeholder="Enter Class Name">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection