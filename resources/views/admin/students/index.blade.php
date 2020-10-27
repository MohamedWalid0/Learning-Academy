@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Students</h4>
            </div>
            <div>
                <a href="{{route('students.create')}}" class="btn btn-primary">Add student</a>
            </div>
        </div>


        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Spec</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)

                <tr>
                    <th scope="row">{{$loop->iteration}}</th>

                    <td>{{$student->name}}</td>

                    <td> {{$student->email}}</td>

                    <td> {{$student->spec}}</td>

                    <td>
                        <a href="{{route('students.edit' , $student->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('students.delete' , $student->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('students.showCourses' , $student->id)}}" class="btn btn-warning">Show Courses</a>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


@endsection
