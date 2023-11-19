@extends('frontend.master')
@section('content')
<div class="site-section-cover overlay h-25" style="background-color:#303030; height:50%">
    <div class="container">
        <div class="row align-items-center justify-content-center" >
            <div class="col-lg-10 text-center">
                <h1>Home <strong>Tutor</strong> Management<strong> System</strong></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <!-- welcome tittle -->
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center mb-5">
                <div class="heading">
                    <span class="caption">Welcome To Tuition Management Site</span>

                </div>
            </div>
        </div>
        <!-- end welcome tittle -->

        <!-- breif  section -->
        
        <!-- end breif  section -->

        <!-- cart for post -->
        
        <div class="row ">
        @foreach ($tuitionposts as $tpost)
            
                <div class="col-lg-4 mb-4 mb-lg-0 " >
                    <div class="testimonial-2 mb-3">
                        
                    

                        <h3 class="h5">Tuition Post!</h3>

                        <div class="d-flex v-card align-items-center">
                            <img src="{{url('/uploads/'.$tpost->image)}}" alt="Image" class="img-fluid mr-3">
                        </div>
                        <h6>Name: {{$tpost->name}}</h6>                       
                        <h6>Role: {{$tpost->role}}</h6>
                        <h6>Email Address: {{$tpost->email}}</h6>
                        
                        <h6>Class: {{$tpost->class_list}}</h6>
                        <h6>Subject: {{$tpost->subject_name}}</h6>
                        <h6>Salary: {{$tpost->salary}} .BDT</h6>
                        <h6>Contact: {{$tpost->contact}}</h6>
                        <a class="btn btn-primary" href="#" role="button">Apply</a>
                        
                        <!-- <blockquote class="mb-4">
                            <p>Class: {{$tpost->class_lits}}</p>
                        </blockquote> -->
                        

                        <!-- <div class="d-flex v-card align-items-center">
                            <img src="{{url('/uploads/'.$tpost->image)}}" alt="Image" class="img-fluid mr-3">
                        </div> -->
                    </div>
                </div>
            
        @endforeach   
        </div>
      
           

        <!-- end cart -->
    </div>
@endsection