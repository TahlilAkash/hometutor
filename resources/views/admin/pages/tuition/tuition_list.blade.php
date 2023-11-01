@extends('admin.master')

@section('content')
<h3>Tuition Info</h3>
<a class="btn btn-success" href="{{route('tuition.form')}}">Add Tution Info</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Tuition Type</th>
      <th scope="col">Salary</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tuitions as $key=>$tuition)

    <tr>
      <td scope="row">{{$key+1}}</td>
      <!-- <th scope="row">{{$tuition->id}}</th> -->

      <td>{{$tuition->subject_id}}</td>
      <!-- objects---relation--property  if not obj--property -->
      <td>{{$tuition->type}}</td>
      <td>{{$tuition->institute_id}}</td>
      <td>{{$tuition->preferable_salary}}</td>
      <td>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection