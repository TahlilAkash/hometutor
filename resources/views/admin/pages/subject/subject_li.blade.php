@extends('admin.master')
@section('content')

<div class="container">
<h3>Subject List</h3>

<a class =" btn btn-success"href="{{route('subject_create.form')}}">Create Subject </a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Subject Name</th>
        <!-- <th scope="col">Subject Code</th> -->
        <th scope="col">Description</th>
        <!-- <th scope="col">Class</th>
        <th scope="col">Study Hours</th> -->
        <th scope="col">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <tr>
        <th scope="row">{{$subject->id}}</th>
        <!-- form name property -->
        <td>{{$subject->name}}</td>       
        <!-- <td>{{$subject->code}}</td> -->
        <td>{{$subject->description}}</td>
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