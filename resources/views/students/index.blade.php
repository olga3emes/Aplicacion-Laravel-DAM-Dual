

@extends('students.layout')

@section('content')


    <div class="row text-center">
        <h2>Student Crud Operations</h2>
        <div class="row justify-content-center">
            <div class="col col-12">
                <a class="btn btn-primary" href="{{ route('students.create') }}">
                    <i class="bi bi-plus-circle-fill"></i> New Student</a>
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
                    <th>Age</th>
                    <th>Fee</th>
                    <th>Class</th>
                    <th width="300px">Action</th>
            
                </tr>
                </thead>
                @foreach ($students as $student)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $student->studname }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->fee }}</td>
                        <td>{{ $student->course->name}}</td>
                        <td>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                <a class="btn btn-secondary" href="{{ route('students.show', $student->id) }}"><i class="bi bi-eye"></i> Show</a>
                                <a class="btn btn-info" href="{{ route('students.edit', $student->id) }}"> <i class="bi bi-pencil"></i> Edit</a>
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
