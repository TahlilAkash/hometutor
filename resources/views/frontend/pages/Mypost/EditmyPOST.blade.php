@extends('frontend.master')

@section('content')
    
    
<div class="container">
    <h2 class="mb-3" style="font-size: 30px">Update Your Post</h2>
    <!-- enctype="multipart/form-data" -->
    <form action="{{route('myPost.update',$editmyPost->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        

        <div class="form-group">
            <label for="name">Name:</label>
            <input value="{{$editmyPost->name}}" name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

        </div>

        <div class="form-group">
            <label for="">Role:</label>
            <select required class="form-control" name="role" id="">

                <option value="{{$editmyPost->role}}">Tuitor</option>
                
                
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input value="{{$editmyPost->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>

        

        <div class="form-group">
            <label for="">Class List </label>
            
            <select required class="form-control" name="class_list" id="">
                <option value="{{$editmyPost->class_list}}">{{$editmyPost->class_list}}</option>
               
                @foreach ($classts as $classt)
                
                <option value="{{$classt->name}}">{{$classt->name}}</option>
                @endforeach
    
            </select>
        </div>


        <div class="form-group">
            <label for="">Subject Name</label>
           
            <select required class="form-control" name="subject_name" id="">
                <option value="{{$editmyPost->subject_name}}">{{$editmyPost->subject_name}}</option>
                
                @foreach ($subjects as $subject)
                <option value="{{$subject->name}}">{{$subject->name}}</option>
                @endforeach
    
            </select>
        </div>
        
        <div class="form-group">
            <label for="">Salary: </label>
            <input value="{{$editmyPost->salary}}" required type="number" name="salary" class="form-control" id="" placeholder="Salary">
        </div>

        <div class="form-group">
            <label for="">Contact: </label>
            <input value="{{$editmyPost->contact}}" type="tel" name="contact" class="form-control" id="" placeholder="Contact">
        </div>


        <div class="form-group">
            <label for="">Address:</label>
            <textarea  class="form-control" name="address" id="" cols="15" rows="5">{{$editmyPost->address}}</textarea>
        </div>

        


        <div class="form-group">
            <label for="">Upload Your Image: </label>
            <input value="{{$editmyPost->image}}" name="image" type="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>

@endsection