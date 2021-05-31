@extends('students.layout')

@section('content')
<div class="row text-center">
    <h2>Create Student</h2>
    

    @if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Whoops!</strong> There were some problems with your input.</p>
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

    <form class="row g-3 needs-validation" action="{{route('students.store')}}"  method="POST">
        @csrf
      <div class="col-md-4">
        <label for="studname" class="form-label">Student name</label>
        <input type="text" name="studname" class="form-control" id="studname"  placeholder="Student Name" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
     
      <div class="col-md-4">
        <label for="fee" class="form-label">Fee</label>
        <input type="text" name="fee" class="form-control" id="fee" placeholder="Fee" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>

      <div class="col-md-4">
        <label for="course" class="form-label">Course</label>
        <select class="form-select" name="course_id" id="course_id" aria-label="Course Selector">
         @foreach ($courses as $course)
         <option value="{{$course->id}}">{{$course->name}}</option>
         @endforeach
        </select>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
     
     
      <div class="col-12">
        <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Submit</button>
      </div>
    </form>
</div>

<div class="row justify-content-center">
    <div class="col col-12">
        <a class="btn btn-primary" href="{{ route('students.index') }}">
            <i class="bi bi-back"></i> Back</a>
    </div>

@endsection