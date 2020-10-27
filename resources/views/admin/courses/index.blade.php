@extends('admin.layouts.layout')

@section('content')

    <div class="container my-5">
        <div class="row justify-content-between my-5">
            <div>
                <h4>Courses</h4>
            </div>
            <div>
                <a href="{{route('courses.create')}}" class="btn btn-primary">Add course</a>
            </div>
        </div>


        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Categoty</th>
                    <th scope="col">price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)

                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>
                        <img src="{{asset('front/img/' . $course->img)}}" width="70px" height="70px" class="rounded-circle" alt="">
                    </td>
                    <td>{{$course->name}}</td>

                    <td>{{$course->cat->name}}</td>

                    <td> {{$course->price}}</td>



                    <td>
                        <a href="{{route('courses.edit' , $course->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{route('courses.delete' , $course->id)}}" class="btn btn-danger">Delete</a>

                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


@endsection
