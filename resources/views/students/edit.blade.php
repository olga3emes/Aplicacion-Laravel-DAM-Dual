@extends('students.layout')

@section('content')
<div class="row text-center">
    <h2>Edit Student</h2>
    
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
        
    @endif

  

    <form class="row g-3 needs-validation"action="{{route('students.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-4">
            <label for="studname" class="form-label">Student name</label>
            <input type="text" name="studname" class="form-control" id="studname" value="{{$student->studname}}"  placeholder="Student Name" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-4">
            <label for="age" class="form-label">Course</label>
            <input type="text" name="age" class="form-control" id="age" value="{{$student->age}}" placeholder="Age" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
         
          <div class="col-md-4">
            <label for="fee" class="form-label">Fee</label>
            <input type="text" name="fee" class="form-control" id="fee" value="{{$student->fee}}" placeholder="Fee" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-4">
            <label for="fee" class="form-label">Fee</label>
            <input type="text" name="fee" class="form-control" id="fee" value="{{$student->fee}}" placeholder="Fee" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-4">
            <label for="course" class="form-label">Course</label>
            <select class="form-select" name="course_id" id="course_id" aria-label="Default select example">
              @foreach ($courses as $course)
              <option value="{{$course->id}}" @if($course->id==$student->course_id) selected @endif>{{$course->name}}</option>
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

    @endsection