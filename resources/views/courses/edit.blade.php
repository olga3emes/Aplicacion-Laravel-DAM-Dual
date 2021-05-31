@extends('courses.layout')

@section('content')
<div class="row text-center">
    <h2>Edit course</h2>
    
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

    <form class="row g-3 needs-validation"action="{{route('courses.update',$course->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="col-md-4">
            <label for="name" class="form-label">course name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$course->name}}"  placeholder="course Name" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-12">
            <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Submit</button>
          </div>

    </form>

    @endsection