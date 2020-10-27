@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Students / Show Courses </h4>
            </div>
            <div>
                <a href="{{route('students.addToCourse' , $student_id)}}" class="btn btn-info">Add Course</a>

                <a href="{{route('students')}}" class="btn btn-primary">Back</a>
            </div>
        </div>

        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)

                <tr>
                    <td scope="row">{{$loop->iteration}}</td>

                    <td>{{$course->name}}</td>


                    <td>
                        @if ($course->pivot->status !== 'approve')
                            <a href="{{route('students.approveCourse' , [ $student_id , $course->id ])}}" class="btn btn-info">Approve</a>
                        @endif
                        @if ($course->pivot->status !== 'reject')
                            <a href="{{route('students.rejectCourse' , [ $student_id , $course->id ])}}" class="btn btn-danger">Reject</a>
                        @endif
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


@endsection
