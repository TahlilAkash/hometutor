@extends('frontend.master')

@section('content')

<div class="container">
    <!-- enctype="multipart/form-data" -->
    <form action="{{route('member.post.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input required name="name" type="text" class="form-control" id="name" placeholder="Enter your name">

        </div>

        <div class="form-group">
            <label for="">Role:</label>
            <select required class="form-control" name="role" id="">

                <option value="tutor">Tutor</option>
                <!-- <option value="student">Student</option> -->
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

        </div>

        

        <div class="form-group">
            <label for="">Class List </label>
            <select required class="form-control" name="class_list" id="">

                <option value="Four">Four</option>
                <option value="Five">Five</option>
                <option value="Six">Six</option>
                <option value="Seven">Seven</option>
                <option value="Eight">Eight</option>
                <option value="Nine">Nine</option>
                <option value="Ten">Ten</option>
                <option value="Eleven">Eleven</option>
                <option value="Twelve">Twelve</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Subject Name</label>
            <input required type="text" class="form-control" id="" name="subject_name" placeholder="Enter Subject Name">
        </div>

        <div class="form-group">
            <label for="">Contact: </label>
            <input type="tel" name="contact" class="form-control" id="" placeholder="Contact">
        </div>
        
        <div class="form-group">
            <label for="">Salary: </label>
            <input required type="number" name="salary" class="form-control" id="" placeholder="Salary">
        </div>


        <div class="form-group">
            <label for="">Address:</label>
            <textarea class="form-control" name="address" id="" cols="15" rows="5"></textarea>
        </div>

        


        <div class="form-group">
            <label for="">Upload Your Image: </label>
            <input name="image" type="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>
@endsection