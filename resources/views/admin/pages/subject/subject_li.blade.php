@extends('admin.master')
@section('content')
<h3>Subject List</h3>
<div>
<a class =" btn btn-success"href="{{url('/subject/form')}}">Create Subject </a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Subject Name</th>
        <th scope="col">Class</th>
        <th scope="col">Study Hours</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <tr>
        <th scope="row">{{$subject->id}}</th>
        <!-- form name property -->
        <td>{{$subject->name}}</td>       
        <td>{{$subject->class}}</td>
        <td>{{$subject->study_hours}}</td>
        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
     
    </tbody>
    </table>

</div>
{{$subjects->links() }}
@endsection