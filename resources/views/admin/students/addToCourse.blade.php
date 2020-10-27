@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>students / Add / {{$student->name}} / to course /  </h4>
            </div>
            <div>
                <a href="{{route('students')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="container my-5">


        @include('admin.inc.errors')

        <form action="{{ route ('students.storeCourse' , $student->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <select class="custom-select" name="course_id">
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>


            </div>

            <button type="submit" class="btn btn-primary my-5">Add</button>
        </form>

    </div>

@endsection
