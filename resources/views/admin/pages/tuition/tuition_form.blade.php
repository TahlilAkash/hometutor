@extends('admin.master')

@section('content')

<form action="{{route('tuition.store')}}"method="post">
    @csrf
    <div class="form-group">
        <label for="">Select Subject:</label>
        <select class="form-control" name="subject_id" id="">

            <!-- select option from subject table -->
            @foreach ($subjects as $subject)
            <option value="{{$subject->id}}">{{$subject->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="">Tuiton Type:</label>
        <input type="text" class="form-control" id="" name="type" placeholder="online or offline">
    </div>

    <div class="form-group">
        <label for="">Select Institute:</label>
        <select class="form-control" name="institute_id" id="">

            @foreach ($institutes as $institute )
            <option value="{{$institute->id}}">{{$institute->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="form-group">
        <label for="">Enter Salary: </label>
        <input type="number" class="form-control" placeholder="Preferable Salary" name="preferable_salary">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection