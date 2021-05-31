@extends('courses.layout')

@section('content')
<div class="row text-center">
    <h2>Create course</h2>
    

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

    <form class="row g-3 needs-validation" action="{{route('courses.store')}}"  method="POST">
        @csrf
      <div class="col-md-4">
        <label for="name" class="form-label">course name</label>
        <input type="text" name="name" class="form-control" id="name"  placeholder="course Name" required>
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
        <a class="btn btn-primary" href="{{ route('courses.index') }}">
            <i class="bi bi-back"></i> Back</a>
    </div>

@endsection