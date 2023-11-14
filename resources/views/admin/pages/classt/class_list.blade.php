@extends('admin.master')
@section('content')
<h1>Class List</h1>
<a class=" btn btn-success" href="{{route('class.form')}}">Create Subject </a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Class Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

        </tr>
    </thead>
    @foreach($classts as $classt)
    <tr>
        <th scope="row">{{$classt->id}}</th>
        <!-- form name property -->
        <td>{{$classt->name}}</td>

        <td>{{$classt->description}}</td>
        <td>{{$classt->status}}</td>
        <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    <tbody>

    </tbody>


</table>

</div>
@endsection