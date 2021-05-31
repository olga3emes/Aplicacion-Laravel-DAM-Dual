@extends('courses.layout')

@section('content')


    <div class="row text-center">
        <h2>Course Crud Operations</h2>
        <div class="row justify-content-center">
            <div class="col col-12">
                <a class="btn btn-primary" href="{{ route('courses.create') }}">
                    <i class="bi bi-plus-circle-fill"></i> New Course</a>
            </div>
        </div>
    </div>


    

        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-1 alert-dismissible fade show" role="alert">
                {{ $message }}
            </div>
        @endif
        
           
            <table class="table table-bordered mt-3">
                <thead>
                <tr>
                    <th>Nº</th>
                    <th>Name</th>
                    <th width="300px">Action</th>
            
                </tr>
                </thead>
                @foreach ($courses as $course)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $course->name }}</td>
                        <td>
                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                <a class="btn btn-secondary" href="{{ route('courses.show', $course->id) }}"><i class="bi bi-eye"></i> Show</a>
                                <a class="btn btn-info" href="{{ route('courses.edit', $course->id) }}"> <i class="bi bi-pencil"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i> Delete</button>
                            </form>

                        </td>
                     

                    </tr>
                </tbody>
                @endforeach
            </table>
         
  @endsection    
